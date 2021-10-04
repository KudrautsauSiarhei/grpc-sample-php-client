# grpc-sample-php-client

```shell
protoc --proto_path=proto --php_out=lib/Grpc --grpc_out=lib/Grpc proto/GreetingService.proto --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin
```

```shell
php -f index.php
```

```shell
php -f index2.php
```
