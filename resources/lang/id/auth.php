<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris-baris bahasa untuk autentifikasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan selama proses autentifikasi untuk beberapa pesan
    | yang perlu kita tampilkan ke pengguna. Anda bebas untuk memodifikasi
    | baris bahasa sesuai dengan keperluan aplikasi anda.
    |
    */

    'success' => 'Berhasil login!',
    'failed' => 'Identitas tersebut tidak cocok dengan data kami.',
    'password' => 'Password salah.',
    'throttle' => 'Terlalu banyak usaha masuk. Silahkan coba lagi dalam :seconds detik.',

    'user' => [
        'not_verified' => 'User tidak terverifikasi!',
        'not_found' => 'User dengan nomor telepon :number tidak ada.',
        'verify' => [
            'success' => 'User berhasil diverifikasi!'
        ]
    ],

    'register' => [
        'otp' => [
            'message' => "[:application] Kode verifikasi anda adalah:\n\n:number",
            'wrong' => 'Kode OTP salah!'
        ],
        'success' => [
            'sent' => 'Berhasil daftar! Kode verifikasi berhasil dikirim via WhatsApp.',
            'failed' => 'Berhasil daftar! Kode verifikasi gagal terkirim.'
        ]
    ],

    'token' => [
        'verified' => 'Token terverifikasi.',
        'invalid' => 'Token tidak valid.'
    ]
];
