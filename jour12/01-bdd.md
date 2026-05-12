# phpMyAdmin

http://localhost:8091

Serveur :  database
Utilisateur :  blog
password : blog

```sql
CREATE TABLE recettes (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    imgPath VARCHAR(255) DEFAULT "https://placehold.co/600x400",
    description TEXT 
);

INSERT INTO recettes (nom  , description) VALUES
("banane flambée", "lorem"),
("pain perdu", "lorem"),
("tarte aux abricots", "lorem");
```