<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<h1>Lancement de Symfony</h1>
  Après avor installer Symfony, NOus avopns compris de quoi il etait fait, maintenant nous alons voir sans doute à quoi il ressemble. Pour cela , nous allons lancer un serveur PHP afin de pouvoir interpréter le code php et afficher nos pages dans le navigateur.
   
    <h2>Serveur interne à PHP</h2>
    Si l'installation dde symfony a été faite avec Composer et sans l'aide de Symfony CLI, nous pouvons utiliser un serveur interne de PHP de cette manière:

    php -S 127.0.0.1:8000 -t public/

     127.0.0.1 correspond à l'adresse IP locale de votre machine

     8000 correspond au port sur lequel vous voulez lancer votre application. Vous pouvez choisir celui que vous souhaitez , mais attention cependant , certains ports sont reservés pour des usages précis.
    Le port par defaut est gégéralement 8000.

    -t public/ précise à symfony que le point d'entrée de votre application se trouve dans le dossier "public/" implicitement, c'est le fichier "index.php"
 qui sera sollicité. il est indispensable de préciser ce paramètre pour lancer une application Symfony via le serveur inyterne de PHP.    
  </body>
</html>