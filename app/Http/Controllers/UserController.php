<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $users = User::with('roles:name')->filter($request->only(['search', 'application_id', 'role', 'branch']))->filterRole($request->only(['super']))->latest()->get();
        } else {
            $users = User::with('roles:name')->filter($request->only(['search', 'application_id', 'role', 'branch', 'name', 'phone', 'from', 'to']))->filterRole($request->only(['super']))->latest()->paginate(15)->setPath('')->withQueryString();
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('user')]),
            'data' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        DB::beginTransaction();

        try {
            $payload = $request->validatedExcept('password');
            $payload['password'] = bcrypt($request->input('password'));

            User::create($payload);

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['pluralization' => 'an', 'model' => 'user'])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->load(['roles']);

        return response()->json([
            'message' => __('api.read.success', ['model' => __('user')]),
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        DB::beginTransaction();

        try {
            $user->update($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['pluralization' => 'an', 'model' => 'user'])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();

        try {
            $user->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy', ['pluralization' => 'an', 'model' => 'user'])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
