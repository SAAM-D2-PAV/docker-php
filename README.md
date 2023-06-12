# DOCKER PHP TEMPLATE 
### version juin 2023
https://www.docker.com/
### COMMANDES UTILES 
- run docker
```sh
docker compose up
```
- information sur le container
```sh
docker ps
```

- information sur le service
```sh
docker compose ps
```

### https://hub.docker.com/

- Build image isolée
```sh
 docker build -t mlr:php81 -f php/Dockerfile .
 ```

 ` run docker images `


###Exemple docker-compose.yml apache / php / mysql
```sh
 version: '3'
services:
  apache:
    image: php:apache
    ports:
      - 80:80
    volumes:
      - ./src:/var/www/html
      - ./apache-config:/etc/apache2/sites-available
    depends_on:
      - mysql
    environment:
      - PHP_IDE_CONFIG=serverName=localhost
    networks:
      - mynetwork

  mysql:
    image: mysql
    ports:
      - 3306:3306
    volumes:
      - ./mysql-data:/var/lib/mysql
    environment:
      - MYSQL_ROOT_PASSWORD=your_mysql_root_password
      - MYSQL_DATABASE=your_mysql_database
      - MYSQL_USER=your_mysql_user
      - MYSQL_PASSWORD=your_mysql_password
    networks:
      - mynetwork

  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    ports:
      - 8080:80
    environment:
      - PMA_ARBITRARY=1
      - PMA_HOST=mysql
    networks:
      - mynetwork

networks:
  mynetwork:
 ```


 Ce fichier docker-compose.yml définit trois services : apache, mysql et phpmyadmin. Le service apache utilise l'image php:apache pour exécuter Apache avec PHP. Il mappe le port 80 de votre machine hôte vers le port 80 du conteneur Apache. Le dossier ./src est monté dans le conteneur pour servir les fichiers PHP. Le dossier ./apache-config est également monté pour permettre la configuration personnalisée d'Apache.

Le service mysql utilise l'image MySQL officielle et mappe le port 3306 pour se connecter à la base de données MySQL depuis votre machine hôte. Le dossier ./mysql-data est monté pour persister les données de la base de données entre les redémarrages des conteneurs.

Le service phpmyadmin utilise l'image phpMyAdmin pour fournir une interface web pour la gestion de la base de données MySQL. Il mappe le port 8080 de votre machine hôte vers le port 80 du conteneur phpMyAdmin.

Assurez-vous de remplacer les valeurs your_mysql_root_password, your_mysql_database, your_mysql_user et your_mysql_password par les valeurs de votre choix dans la section environment du service mysql.

Maintenant, créez un dossier src à côté de votre fichier docker-compose.yml. C'est là que vous pouvez placer vos fichiers PHP.

Créez également un dossier apache-config à côté de votre fichier docker-compose.yml. Dans ce dossier, créez un fichier 000-default.conf avec le contenu suivant :
```sh
<VirtualHost *:80>
    DocumentRoot /var/www/html
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    <Directory /var/www/html>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
 ```

 Ce fichier de configuration Apache permet d'activer les réécritures d'URL et de permettre la personnalisation du fichier .htaccess