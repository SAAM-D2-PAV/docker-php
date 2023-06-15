# DOCKER PHP TEMPLATE 
### version juin 2023
https://www.docker.com/
### COMMANDES UTILES 
- run docker

// prod
```sh
docker compose up 'option' -d
```
// dev 
```sh
 docker compose -f docker-compose.dev.yaml up --build -d
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

### Shell du container
```sh
 docker exec -it docker-php-app-1 sh
 ```

 ### environnement local
```sh
docker compose -f docker-compose.dev.yaml up --env-file .env.local
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