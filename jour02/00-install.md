# commande


```dockerfile
FROM vulnerables/web-dvwa

# PHP ini tweaks
RUN sed -i 's/allow_url_include = Off/allow_url_include = On/' /usr/local/etc/php/php.ini-production \
 && sed -i 's/allow_url_fopen = Off/allow_url_fopen = On/' /usr/local/etc/php/php.ini-production \
 && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# Script qui patch config.inc.php au démarrage
RUN cat > /usr/local/bin/dvwa-set-recaptcha.sh <<'SH' \
 && chmod +x /usr/local/bin/dvwa-set-recaptcha.sh
#!/usr/bin/env sh
set -eu

CFG="/var/www/html/config/config.inc.php"
DIST="/var/www/html/config/config.inc.php.dist"

# Si config manquante, copier le template
if [ ! -f "$CFG" ] && [ -f "$DIST" ]; then
  cp "$DIST" "$CFG"
fi

# Si variables définies, injecter
if [ -n "${RECAPTCHA_SITE_KEY:-}" ] && [ -n "${RECAPTCHA_SECRET_KEY:-}" ] && [ -f "$CFG" ]; then
  # remplace si présent
  sed -i "s/^\(\$_DVWA\[\s*'recaptcha_public_key'\s*\]\s*=\s*\).*/\1'${RECAPTCHA_SITE_KEY}';/" "$CFG" || true
  sed -i "s/^\(\$_DVWA\[\s*'recaptcha_private_key'\s*\]\s*=\s*\).*/\1'${RECAPTCHA_SECRET_KEY}';/" "$CFG" || true

  # ajoute si absent
  grep -q "recaptcha_public_key" "$CFG" || echo "\$_DVWA[ 'recaptcha_public_key' ]  = '${RECAPTCHA_SITE_KEY}';" >> "$CFG"
  grep -q "recaptcha_private_key" "$CFG" || echo "\$_DVWA[ 'recaptcha_private_key' ] = '${RECAPTCHA_SECRET_KEY}';" >> "$CFG"
fi

# Lancer le process normal (Apache foreground dans l'image DVWA)
exec "$@"
SH

# On wrap la commande de l'image avec notre script
ENTRYPOINT ["/usr/local/bin/dvwa-set-recaptcha.sh"]
CMD ["apache2-foreground"]
```

```sh
docker build -t dvwa-recaptcha-env .
docker run --rm -d -p 8081:80 \
  -e RECAPTCHA_SITE_KEY="VOTRE_SITE_KEY" \
  -e RECAPTCHA_SECRET_KEY="VOTRE_SECRET_KEY" \
  dvwa-recaptcha-env
```


http://localhost:8081