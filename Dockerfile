# =====================================================
# 🚀 Laravel + PHP 8.2 + Nginx + Supervisor (Optimized)
# =====================================================

FROM php:8.2-fpm

# ---- Instalar dependencias del sistema ----
RUN apt-get update && apt-get install -y \
    git curl zip unzip nginx supervisor libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev libzip-dev libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl opcache \
    && rm -rf /var/lib/apt/lists/*

# ---- Instalar Composer ----
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# ---- Configurar directorio de trabajo ----
WORKDIR /var/www/html

# ---- Copiar proyecto Laravel ----
COPY . .

# ---- Instalar dependencias de Laravel ----
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# ---- Permisos correctos ----
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ---- Configurar Nginx y Supervisor ----
RUN rm /etc/nginx/sites-enabled/default
COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisord.conf

# ---- Optimizar PHP para rendimiento ----
COPY ./php.ini /usr/local/etc/php/conf.d/custom.ini

# ---- Exponer puerto web ----
EXPOSE 80

# ---- Iniciar servicios ----
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
