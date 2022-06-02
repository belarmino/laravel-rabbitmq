<?php

namespace App\Queue\Jobs;

use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob as BaseJob;
use Illuminate\Support\Facades\Log;

class RabbitMQJob extends BaseJob
{

    /**
     * Fire the job.
     *
     * @return void
     */
    public function fire()
    {
        Log::info("Begin RabbitMQJob fire");
        $payload = $this->payload();

        $class = HelloTest::class;
        $method = 'handle';

        ($this->instance = $this->resolve($class))->{$method}($this, $payload);

        $this->delete();
        Log::info("End RabbitMQJob fire");
    }
}