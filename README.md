
yii2 docker 脚手架
Docker-yii2-api-scaffold

执行数据库迁移
docker exec -i webfenxi_app_1  ./yii migrate

 * Ephemeral container, configured via environment variables
 * Testing container for easy testing
 * Optional local configuration overrides for development/debugging (git-ignored)
 * Base scaffold code for login, signup and forgot-password actions
 * Flat configuration file structure
 * Supports docker image based development workflow

The `yii2-base` image comes in three flavours:

 * **Apache with PHP module** (based on `php:7.0.6-apache` or `php:5.6.18-apache`)
 * **PHP-FPM** (based on `php:7.0.6-fpm` or `php:5.6.18-fpm`)
 * **HHVM** (based on `estebanmatias92/hhvm:3.8.1-fastcgi`)

Quickstart
-------------

You need to have [docker](http://www.docker.com) (>=1.5.0) and
[docker-compose](https://docs.docker.com/compose/install/) installed.

```sh
composer create-project --no-install codemix/yii2-dockerized myproject
cd myproject
cp docker-compose-example.yml docker-compose.yml
cp .env-example .env
docker-compose up
# From another terminal window:
docker-compose run --rm web ./yii migrate
```

It may take some minutes to download the required docker images. When
done, you can access the new app from [http://localhost:8080](http://localost:8080).

> *Note:* If you don't have `composer` installed locally you can also use a docker container
> to use composer:
>
> ```
> docker run --rm -v /srv/projects:/var/www/html codemix/yii2-base:2.0.8-apache composer create-project --no-install codemix/yii2-dockerized myproject
> ```

Please check the [Wiki](https://github.com/codemix/yii2-dockerized/wiki) for full documentation.
=======
# webfenxi
>>>>>>> 21abd627987aa6eec27c7732c4899f46297ae9a5
