# Définitions

- fonctions de hashage
- md5 / sha1 
    - unidirectionnel 
    - stocker les mots de passe dans une base données 
    - verifier que le texte / le code que vous avez reçu n'a pas été modifié 
    - si vous avez devant vous une emprunte => 32 caractères  => MD5()
    - vous pouvez avoir la même emprunte pour deux textes en clair différents (les collisions)
    - sha256

-> https://www.sha1.fr/

azerty1234 (plaintext) => sha1() => c6c4940b323ff81c66e02a02e0281c370c535008
coucou2223 (plaintext) => sha1() => c6c4940b323ff81c66e02a02e0281c370c535008

utiliser la fonction md5 avec un graine de sel (un salt)

iezuhdizeugndiazerty1234doezijdzoeidnz => sha1() => 10aa18e954deff35adeb5e5dcc3d55748c2820b5

<https://crackstation.net/>


pris un mot de passe + salter (ajouter du texte avant et après ) => sha1()


---

https://www.bcrypt.fr/

Bcrypt => azerty1234! => Bcrypt

$2y$10$o7MC4u4/FJvcoajxIgShquOarnsu.hzwgOsPRUGS2poWQfq5gQMe2

$2y$10$fGt1fHghyemw81suhJcyAuMA.69bhPPA1829nBEzU9Wd0oIjlFpRC

=> utiliser plutôt l'algorithme bcrypt pour le stocker des mots de passe en base de données

=> même longueur MAIS il change 

== 
bcrypt.hash("mot clair")

bcrypt.verify("mot clair", "hash")


JWT
====

Hash based Message Authentication Code (signé)


JWT : JSON Web Token 
une technologie essentielle pour se partager des informations clés entre 2 machines ce n'est pas un technologie de masquage c'est une technologie qui garantie QUI est l'émetteur 

base64() 


secu

rite

Authorization
	Basic c2VjdTpyaXRl


- fonction de chiffrage 
- rot13  