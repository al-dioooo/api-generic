<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Models\User;
use App\Traits\Verification;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    use Verification;

    protected $factory;

    public function __construct()
    {
        $this->factory = Factory::create();
    }

    public function register(RegisterRequest $request)
    {
        $otp = $this->factory->randomNumber('8', true);

        $user = User::create([
            'application_id' => $request->input('application_id'),
            'country_id' => $request->input('country_id'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'otp' => $otp
        ]);

        $sendOtp = $this->sendMessage($request->input('phone'), __('auth.register.otp.message', ['application' => $user->application->name, 'number' => $otp]));

        if ($sendOtp) {
            return response()->json([
                'message' => __('auth.register.success.sent'),
                'data' => [
                    'user' => $user
                ]
            ]);
        } else {
            return response()->json([
                'message' => __('auth.register.success.sent')
            ], 503);
        }
    }

    public function login(LoginRequest $request)
    {
        $user = User::with('roles.permissions:node')->where('phone', $request->input('phone'))->first();
        $phone = $request->input('phone');

        if ($user) {
            if (Hash::check($request->input('password'), $user->password)) {
                if ($user->is_verified == 0) {
                    return response()->json([
                        'message' => __('auth.user.not_verified'),
                    ], 400);
                } else {
                    $token = null;

                    if ($request->input('remember_me') == 1) {
                        $token = bcrypt($this->factory->randomNumber('8', true));

                        $user->remember_token = $token;
                        $user->save();
                    }

                    return response()->json([
                        'message' => __('auth.success'),
                        'data' => [
                            'user' => $user,
                            'token' => $token
                        ]
                    ]);
                }
            } else {
                return response()->json([
                    'message' => __('auth.password'),
                ], 400);
            }
        } else {
            return response()->json([
                'message' => __('auth.user.not_found', ['number' => "+$phone"]),
            ], 404);
        }
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        $phone = $request->input('phone');

        $user = User::where('phone', $phone)->first();

        if ($user) {
            $otp = $this->factory->randomNumber('8', true);

            $user->otp = $otp;
            $user->save();

            $sendOtp = $this->sendMessage($phone, __('auth.register.otp.message', ['application' => $user->application->name, 'number' => $otp]));

            if ($sendOtp) {
                return response()->json([
                    'message' => __('auth.register.success.sent')
                ]);
            } else {
                return response()->json([
                    'message' => __('auth.register.success.failed')
                ], 503);
            }
        } else {
            return response()->json([
                'message' => __('auth.user.not_found', ['number' => "+$phone"]),
            ], 404);
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required'
        ]);

        $phone = $request->input('phone');

        $user = User::where('phone', $phone)->first();

        if ($user) {
            if ($user->otp == $request->input('otp')) {
                $user->is_verified = 1;
                $user->save();

                return response()->json([
                    'message' => __('auth.user.verify.success'),
                ]);
            } else {
                return response()->json([
                    'message' => __('auth.register.otp.wrong'),
                ], 400);
            }
        } else {
            return response()->json([
                'message' => __('auth.user.not_found', ['number' => "+$phone"]),
            ], 404);
        }
    }

    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required|string'
        ]);

        $user = User::with('roles.permissions:node')->firstWhere('remember_token', $request->input('token'));

        if ($user) {
            // $token = bcrypt($this->factory->randomNumber('8', true));

            // $user->remember_token = $token;
            // $user->save();

            return response()->json([
                'message' => __('auth.token.verified'),
                'data' => [
                    'user' => $user,
                    'token' => $user->remember_token
                ]
            ]);
        } else {
            return response()->json([
                'message' => __('auth.token.invalid')
            ], 401);
        }
    }
}
