<?php

namespace ReesMcIvor\ChatGPT;

use Illuminate\Support\ServiceProvider;

class ChatGPTPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $migrationPath = $this->tenancy ? 'migrations/tenant' : 'migrations';
            $this->publishes([
                __DIR__ . '/../database/migrations/tenant' => database_path($migrationPath),
                __DIR__ . '/../database/migrations' => database_path('migrations'),
                __DIR__ . '/../publish/tests' => base_path('tests/ChatGPT'),
                __DIR__ . '/../publish/config' => base_path('config'),
            ], 'laravel-chat-gpt');
        }
    }

    private function modulePath($path)
    {
        return __DIR__ . '/../../' . $path;
    }
}
