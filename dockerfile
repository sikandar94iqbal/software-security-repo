# Use the official PHP and Apache image as a base
FROM php:7.4-apache

# Install any necessary packages
RUN apt-get update \
    && apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
        default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
        mysqli \
        pdo \
        pdo_mysql \
        zip \
        mbstring \
        exif \
        pcntl \
        bcmath \
        soap

# Copy the source code into the container
COPY . /var/www/html/

# Set the working directory to the document root
WORKDIR /var/www/html

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache in the foreground when the container is run
CMD ["apache2-foreground"]
