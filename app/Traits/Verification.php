<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait Verification
{
    private function sendMessage($to, $text)
    {
        $token = env('MAXCHAT_TOKEN', null);

        $client = new Client(['verify' => false]);

        $maxchat = env("MAXCHAT_URL", "https://core.maxchat.id/rsaputra/api");

        $res = $client->post("{$maxchat}/messages", [
            'headers' => [
                'Authorization' => "Bearer {$token}"
            ],
            'form_params' => [
                'to' => $to,
                'type' => 'text',
                'text' => $text
            ]
        ]);

        return $res->getBody();
    }
}
