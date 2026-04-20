FROM vulnerables/web-dvwa

# Activer allow_url_* dans l'ini réel de l'image (php5 dans cette image)
RUN sed -i 's/allow_url_include = Off/allow_url_include = On/' /etc/php/7.0/apache2/php.ini \
 && sed -i 's/allow_url_fopen = Off/allow_url_fopen = On/' /etc/php/7.0/apache2/php.ini

# Script reCAPTCHA dans l'image
RUN cat > /usr/local/bin/dvwa-recaptcha.sh <<'SH'
#!/bin/sh
set -eu

CFG="/var/www/html/config/config.inc.php"

# Patch uniquement si les variables sont fournies au runtime
if [ -n "${RECAPTCHA_SITE_KEY:-}" ] && [ -n "${RECAPTCHA_SECRET_KEY:-}" ]; then
  # Remplace les lignes existantes (même si vides)
  sed -i "s|^\(\$_DVWA\[\s*'recaptcha_public_key'\s*\]\s*=\s*\).*|\1'${RECAPTCHA_SITE_KEY}';|" "$CFG"
  sed -i "s|^\(\$_DVWA\[\s*'recaptcha_private_key'\s*\]\s*=\s*\).*|\1'${RECAPTCHA_SECRET_KEY}';|" "$CFG"

  # Ajoute si jamais les clés n'existent pas (robuste)
  grep -q "recaptcha_public_key" "$CFG" || echo "\$_DVWA[ 'recaptcha_public_key' ]  = '${RECAPTCHA_SITE_KEY}';" >> "$CFG"
  grep -q "recaptcha_private_key" "$CFG" || echo "\$_DVWA[ 'recaptcha_private_key' ] = '${RECAPTCHA_SECRET_KEY}';" >> "$CFG"
fi

# Lancer le vrai démarrage DVWA (MariaDB + Apache)
exec /main.sh
SH

RUN sed -i 's/\r$//' /usr/local/bin/dvwa-recaptcha.sh \
 && chmod +x /usr/local/bin/dvwa-recaptcha.sh

# ✅ On remplace l'ENTRYPOINT d'origine (/main.sh) par notre wrapper
ENTRYPOINT ["/usr/local/bin/dvwa-recaptcha.sh"]