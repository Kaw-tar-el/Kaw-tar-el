# Use official PHP 8.2 + Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev npm && docker-php-ext-install pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files to container
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies & build assets
RUN npm install
RUN npm run build

# Expose port (Render will map automatically)
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
