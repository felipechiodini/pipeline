FROM wyveo/nginx-php-fpm:php82

ENV TZ="America/Sao_Paulo"

WORKDIR /var/www/html

COPY . .

RUN mv .deploy/default.conf /etc/nginx/conf.d/ \
    && mv .deploy/supervisord.conf /etc/
