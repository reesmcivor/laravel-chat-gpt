<?php

namespace ReesMcIvor\ChatGPT\Services;

use Illuminate\Support\Facades\Http;

class ChatGPT {

    public function chat( $message ) {

        if(!$message) {
            throw new NoChatGptQuery("No message provided");
        }

        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.config('chat-gpt.api_secret'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $message
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ])
            ->json();

        return $data['choices'][0]['message'];

    }

}