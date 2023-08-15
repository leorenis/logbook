## Docker nginx

```
docker run --name docker-nginx -v ~/Documents/Studies/Logbook/tools/nginx/default.conf:/etc/nginx/conf.d/default.conf -p8085:80 -d nginx
```

```
docker restart docker-nginx
```

### See more
- https://www.digitalocean.com/community/tutorials/how-to-run-nginx-in-a-docker-container-on-ubuntu-22-04
