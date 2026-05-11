# lancer le projet

```sh
docker compose up -d --build
```

# installer les dépendances PHP via composer

```sh
composer install
```

# Importer / Export de la base de données

dump

```sh
# commande multiligne
docker exec -i "blog-database-1" \
		env MYSQL_PWD="root" \
		mysqldump --user "root" \
		--databases \
		--add-drop-database --add-drop-table \
		"blog" \
		--default-character-set=utf8 > \
		"blog.sql"

# commande monoligne
docker exec -i "blog-database-1" env MYSQL_PWD="root" mysqldump --user "root" --databases --add-drop-database --add-drop-table "blog" --default-character-set=utf8 > "bdd/blog.sql"
```

import

```sh
# commande multiligne (via Linux)
cat $(f) | docker exec -i "$(DB_CONTAINER)" \
		env MYSQL_PWD="$(DB_PASS)" \
		mysql --user "$(DB_USER)" \
		--default_character_set=utf8 \
		"$(DB_NAME)"

# commande monoligne (via Linux)
cat "bdd/blog.sql" | docker exec -i "blog-database-1" env MYSQL_PWD="root" mysql --user "root" --default_character_set=utf8  "blog"
```

# Compte admin créer par défaut

```txt
login :    m@y.fr
password : Azerty1234!
```