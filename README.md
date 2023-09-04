# PHP

## Build

```
docker build -t my-php-app -f Dockerfile-dev .
docker run --rm -p 8081:80 --name my-running-app my-php-app
```