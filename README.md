# Laravel and RabbitMQ

How to create a instance of RabbitMQ in cloud

https://www.cloudamqp.com/

#### config params

```console
QUEUE_CONNECTION=rabbitmq\
RABBITMQ_HOST=woodpecker.rmq.cloudamqp.com\
RABBITMQ_PORT=5672\
RABBITMQ_USER=[YOUR_USER]\
RABBITMQ_PASSWORD=[YOUR_PASSWORD]\
RABBITMQ_VHOST=[YOUR_VHOST]\
```

#### To run command as consumer

```console
php artisan rabbitmq:consume
```

#### To run command as producer

```console
php artisan run:job
```
