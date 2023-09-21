<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'success' => 'Succesfully signed-in!',
    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'user' => [
        'not_verified' => 'User not verified yet!',
        'not_found' => 'User with phone number :number not found.',
        'verify' => [
            'success' => 'Successfully verificated!'
        ]
    ],

    'register' => [
        'otp' => [
            'message' => "[:application] Your verification code is:\n\n:number",
            'wrong' => 'Wrong OTP code!'
        ],
        'success' => [
            'sent' => 'Signed-up succesfully! Verification code successfully sent via WhatsApp.',
            'failed' => 'Signed-up successfully! Verification code failed to sent.'
        ]
    ],

    'token' => [
        'verified' => 'Token verificated.',
        'invalid' => 'Token invalid.'
    ]
];
