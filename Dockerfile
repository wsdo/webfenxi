#FROM codemix/yii2-base:2.0.8-php7-apache
#FROM codemix/yii2-base:2.0.8-php7-fpm
#FROM codemix/yii2-base:2.0.8-hhvm
FROM daocloud.io/wshudong/webfenxi-base:latest

# Composer packages are installed first. This will only add packages
# that are not already in the yii2-base image.

COPY . /var/www/html
RUN composer global require fxp/composer-asset-plugin:~1.1.3 --no-plugins  && \
    composer self-update --no-progress && \
    composer install --no-progress

# The following directories are .dockerignored to not pollute the docker images
# with local logs and published assets from development. So we need to create
# empty dirs and set right permissions inside the container.
RUN mkdir -p runtime web/assets \
    && chown www-data:www-data runtime web/assets

# Expose everything under /var/www (vendor + html)
# This is only required for the nginx setup
VOLUME ["/var/www"]
