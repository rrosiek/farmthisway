FROM php:7.4-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    build-essential libzip-dev libpng-dev libjpeg62-turbo-dev \
    libfreetype6-dev locales zip jpegoptim optipng pngquant gifsicle \
    vim unzip git curl && \
    apt-get autoremove -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install gd zip exif pcntl

RUN groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www
COPY --chown=www:www . /var/www

USER www

EXPOSE 9000

CMD ["php-fpm"]
