<?php

namespace App\Queue\Jobs;
use Illuminate\Support\Facades\Log;

class HelloTest
{

    /**
     * Handle.
     *
     * @return void
     */
    public function handle($instance, $payload)
    {
        Log::info("Begin HelloTest handle");
        Log::info($payload);
        Log::info("End HelloTest handle");
    }
}