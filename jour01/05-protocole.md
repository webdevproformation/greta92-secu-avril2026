# Protocole 

Modèle Client <=> Serveur

1. Firefox / Chrome => client (demande / requête http https)

- google.fr  = 8.8.8.8:80
- facebook.com
- wikidpedia.org

---

2. ??? => elle est sur quelle machine sur internet ??? 
IP du serveur 
réconciliation DNS 

3. => arriver sur le serveur 

4. sur le serveur logiciel qui tournent 24h/24 qui sont services
Apache logiciel qui écoute le port 80 


5. google.fr => déléguer => langage PHP  calculer la page 
6. retourner du html + css + javascript 

7. retourner vers le client  Firefox / Chrome le html + css + javascript 


Faire une requête HTTP
===========================

Le navigateur pour réaliser 4 types de demandes :

- GET   =>  demande au serveur pour que l'on affiche de l'information
        - SELECT 
- POST  =>  lorsque je veux envoyer des informations sur client vers le serveur POUR qu'il les ajoute dans le Serveur (bdd)
        - INSERT INTO
- PUT    => lorsque je veux envoyer des informations sur client vers le serveur POUR faire mise à jour sur tout
        - UPDATE 
- PATCH  => => lorsque je veux envoyer des informations sur client vers le serveur POUR faire mise à jour sur certaines valeurs 
        -  UPDATE  
- DELETE  => lorsque je veux envoyer des informations sur client vers le serveur POUR supprimer une ou plusieurs information
        - DELETE

- http => 80
- https => 443 


----

lorsque le serveur répond (répond du html) en + du html il va retourner un code de réponse 

- 200 => tout est OK 
- 301 => code de redirection (notamment lorsque on se connecte à site )
- 400 => bad request => le serveur attend login + password MAIS il ne reçoit que login 
- 401 => non autorisé => je veux accéder à une page d'un site MAIS je ne me suis pas authentifié
- 403 => je me suis connecté MAIS je n'ai pas suffisant de droit 
    - je me suis connecté en tant que rédacteur et je veux accéder à une page qui n'est disponible QUE les admin : changer les mots de passe
- 404 => Not Found 
- 500 => Internal Server Error - Fatal Error 


<https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP>

---

Requete http 

header
body 

Cookies 
Authentification 