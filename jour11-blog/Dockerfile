FROM php:8.2-apache
# Installer des extensions à PHP
# pdo / gd / imagick
RUN apt update \
    && apt install -y libmagickwand-dev libpng-dev libjpeg-dev libfreetype6-dev --no-install-recommends \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && a2enmod rewrite headers
# Virtual Host
RUN sed -i '/DocumentRoot \/var\/www\/html/c\    DocumentRoot /app\n    <Directory /app>\n        AllowOverride All\n        Require all granted\n    </Directory>' /etc/apache2/sites-available/000-default.conf
# Sécurité au niveau de Apache PoweredBy
RUN echo "expose_php = Off" > /usr/local/etc/php/conf.d/expose_php.ini \
    && echo "ServerTokens Prod" >> /etc/apache2/conf-available/security.conf \
    && echo "ServerSignature Off" >> /etc/apache2/conf-available/security.conf