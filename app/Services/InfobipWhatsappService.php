<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class InfobipWhatsappService
{
    public function sendTextMessage($to, $message)
    {
        $url = config('services.infobip.base_url') . '/whatsapp/1/message/text';

        $response = Http::withHeaders([
            'Authorization' => 'App ' . config('services.infobip.api_key'),
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json'
        ])->post($url, [
            'from' => config('services.infobip.whatsapp_sender'),
            'to'   => $to,
            'content' => [
                'text' => $message
            ]
        ]);

        return $response->json();
    }
}
