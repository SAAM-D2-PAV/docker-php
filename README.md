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

