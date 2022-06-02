# Laravel and RabbitMQ

#### Install lib laravel-queue-rabbitmq

```console
composer require vladimir-yuldashev/laravel-queue-rabbitmq
```

How to create a instance of RabbitMQ in cloud

https://www.cloudamqp.com/

#### config params

```console
QUEUE_CONNECTION=rabbitmq
RABBITMQ_HOST=woodpecker.rmq.cloudamqp.com
RABBITMQ_PORT=5672
RABBITMQ_USER=[YOUR_USER]
RABBITMQ_PASSWORD=[YOUR_PASSWORD]
RABBITMQ_VHOST=[YOUR_VHOST]
```

#### Steps-by-steps

```console
php artisan make:job RabbitMQTest
```

#### To run command as consumer

```console
php artisan rabbitmq:consume
```

#### To run command as producer

```console
php artisan run:job
```

#### Min message struct from other producer

```console
{
"uuid":"c38abfa9-ccd7-4e55-82bc-f062c06e44fc",
"displayName":"App\\Jobs\\RabbitMQTest",
"job":"Illuminate\\Queue\\CallQueuedHandler@call",
"data":"dsdsd"
}
```
