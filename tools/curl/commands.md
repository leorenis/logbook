# Commands
> [!TIP]
> cURL is a command-line tool used for transferring data with URLs, supporting various protocols like HTTP, FTP, and more. It's widely used in scripts and applications for interacting with APIs and fetching web content. Essentially, it acts as a client for making requests to servers. 

cURL using `--location`:
```bash
curl --location 'https://app.domain.com.br/api/public/resources' | json_pp
```

cURL using `--header`:
```zsh
curl --location 'https://mydomain.com:8000/api.php' \
--header 'API-Key: MY-HEADER-HERE' \
--header 'nrParam: 101010101'
```

### See more
- https://curl.se/


