# DOCKER PHP TEMPLATE 
### version juin 2023
https://www.docker.com/
### COMMANDES UTILES 

```sh
docker compose up 'option' -d
```
 ### environnement local ⚠

- dev 🥴

```sh
 docker compose -f docker-compose.dev.yaml up --build -d
 docker compose -f docker-compose.dev.yaml up -d
```

- dev + xdebug 😀

```sh
 XDEBUG_MODE=debug docker compose -f docker-compose.dev.yaml up -d

 > ou via le fichier .env.dev

 docker compose -f docker-compose.dev.yaml --env-file .env.dev up --build -d
 docker compose -f docker-compose.dev.yaml --env-file .env.dev up -d
 docker compose -f docker-compose.dev.yaml down
```

- fin du service

```sh
 docker compose -f docker-compose.dev.yaml down
```


### Shell du container
```sh
 docker exec -it docker-php-app-1 sh
 ```

 ### Créer une nouvelle branche git 
 `git checkout -b nom de la branche  `


### Docker processus
`docker ps`

### Redis commandes
```sh
redis-cli
27.0.0.1:6379> keys *
127.0.0.1:6379> FLUSHALL
OK
 ```

 ### PHP Unit
```sh
cd app/
composer run-phpunit -filename-
 ```