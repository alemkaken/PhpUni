FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get upgrade -y && apt-get install -y --no-install-recommends \
    git \
    curl \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN chmod -R 777 storage bootstrap/cache

CMD ["php-fpm"]