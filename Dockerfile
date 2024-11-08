FROM php:8.2.25-apache-bullseye
#FROM php:7.4.33-apache-bullseye
#FROM  bitnami/phpbb:3.3.0

# Install dependencies
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
    && docker-php-ext-install -j$(nproc) gd mysqli zip

RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/sites-available/000-default.conf    
RUN a2enmod rewrite
# Set PHPBB version
ARG PHPBB_VERSION=3.3.4

ENV PHP_MEMORY_LIMIT=256M
ENV UPLOAD_MAX_FILESIZE=50M


# Download and extract PHPBB
RUN mkdir /scripts
COPY --chmod=+x  docker/entryscrtipt.sh /scripts/entryscrtipt.sh  

RUN chmod +x /scripts/entryscrtipt.sh


COPY phpBB-3.3 /var/www/html
RUN chown -R www-data:www-data /var/www/html

# ADD https://www.phpbb.com/files/release/phpBB-${PHPBB_VERSION}.tar.bz2 /tmp/phpbb.tar.bz2
# RUN tar -xjf /tmp/phpbb.tar.bz2 -C /var/www/html --strip-components=1 \
#     && rm /tmp/phpbb.tar.bz2 \
#     && chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80


# Start Apache
CMD ["/scripts/entryscrtipt.sh"]