# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Create the uploads directory and give proper permissions
RUN mkdir /var/www/html/uploads && \
    chown -R www-data:www-data /var/www/html/uploads && \
    chmod -R 755 /var/www/html/uploads

# Enable Apache mod_rewrite (optional, but often useful)
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
