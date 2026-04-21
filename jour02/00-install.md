# créer la base de données

```sh
# sudo su -
# mysql -u root -p
# root
# CREATE DATABASE dvwa ;
# CREATE USER 'dvwa'@'localhost' IDENTIFIED BY 'p@ssw0rd';
# GRANT ALL PRIVILEGES ON *.* TO dvwa'@'localhost';
# FLUSH PRIVILEGES;
```

# télécharger les sources dans le dossier /var/www/html

- via un git clone
- 
```sh
cd /var/www/html
git clone https://github.com/digininja/DVWA.git dvwa
```

- via un fichier zip

# copier le fichier de config

```sh
cp /var/www/html/dvwa/config/config.ing.php.dist /var/www/html/dvwa/config/config.ing.php

chown www-data:www-data -R /var/www/*
```

# modifier le fichier php.ini

```sh
sed -i "s/display_errors = .*/display_errors = On/" /etc/php/8.3/apache2/php.ini
sed -i "s/allow_url_include = .*/allow_url_include = On/" /etc/php/8.3/apache2/php.ini
sed -i "s/display_startup_errors = .*/display_startup_errors = On/" /etc/php/8.3/apache2/php.ini

a2enmod rewrite

systemctl restart apache2
```


# recaptcha

config/config.inc.php:

```php
$_DVWA[ 'recaptcha_public_key' ] 
$_DVWA[ 'recaptcha_private_key' ]
```

Ces valeurs doivent être générées depuis: <https://www.google.com/recaptcha/admin/create>
