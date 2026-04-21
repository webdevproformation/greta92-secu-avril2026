- Formulaire de connexion classique : connexion de pour votre Gmail
- login 
- password 
- 
- <http://127.0.0.1:4280/vulnerabilities/brute/>

=> rien => Username and/or password incorrect.
=> GET / POST 
=> inspecteur => chercher la balise <form method="GET">

=> adresse internet : <http://127.0.0.1:4280/vulnerabilities/brute/?username=&password=&Login=Login#>


=> <http://127.0.0.1:4280/vulnerabilities/brute/?username=toto&password=toto&Login=Login#>
=> <http://127.0.0.1:4280/vulnerabilities/brute/?username=admin&password=password&Login=Login#>

Outil pour réaliser des attaques par force de brut : Burp Suite
=====================================

- outil qui est un proxy client
- installer la version Community (Gratuit Mais certaines fonctionnalités sont bridées)
- télécharger le fichier 
    - windows => .exe
    - linux   => .sh 

=> dans le dossier téléchargement de linux

```sh
cd Download
chmod +x nom_fichier.sh # rendre le fichier exécutable
./nom_fichier.sh #
lancer l'installation 
```

# Low




# Dépôts github avec des dictionnaires

- <https://github.com/danielmiessler/SecLists/tree/master/Usernames>
- <https://github.com/rapid7/metasploit-framework/tree/master/data/wordlists>
- <https://github.com/webdevproformation/PayloadsAllTheThings/blob/master/SQL%20Injection/Intruder/Auth_Bypass.txt>


# Cas pratique 1

- Réaliser une injection SQL en utilisant la burp suite 
- Utiliser le formulaire low de la section Injection SQL

```
1
1'
1' --
1' #
1' OR 1 #
' OR 1 #
``` 

# Cas pratique 2 

trouver le password de :

```
Gordon
Hack
Pablo
Bob
```

en utilisant le dictionnaire suivant : 

<https://github.com/danielmiessler/SecLists/blob/master/Passwords/Most-Popular-Letter-Passes.txt>

# Medium




# High