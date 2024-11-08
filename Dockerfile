FROM php:8.2.25-apache-bullseye

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zlib1g-dev \
    libzip-dev \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli zip pdo pdo_mysql

RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/sites-available/000-default.conf    
RUN a2enmod rewrite

ENV PHP_MEMORY_LIMIT=256M
ENV UPLOAD_MAX_FILESIZE=50M
WORKDIR /var/www/html
COPY phpBB-3.3 .
RUN chown -R www-data:www-data ../
RUN chmod +x adm/entry.sh

EXPOSE 80

# Start Apache
CMD ["adm/entry.sh"]