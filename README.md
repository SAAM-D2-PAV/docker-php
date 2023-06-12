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

 
```sh
 docker exec -it docker-php-app-1 sh
 ```