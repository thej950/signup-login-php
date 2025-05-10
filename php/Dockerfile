FROM php:7.4-apache

# Enable mysqli extension
RUN docker-php-ext-install mysqli

# Copy PHP files to Apache web root
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html
