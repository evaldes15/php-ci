# PHP

## Build

```
docker build -t my-php-app -f Dockerfile-dev .
docker run --rm -p 8081:80 --name my-running-app my-php-app
```

## Git actions

Crear los siguientes secretos.

```
AWS_ACCESS_KEY_ID=AKIxxxxxxx
AWS_SECRET_ACCESS_KEY=xxxxXXxxxxxxx
```