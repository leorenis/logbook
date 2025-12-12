# Commands
> [!TIP]
> cURL is a command-line tool used for transferring data with URLs, supporting various protocols like HTTP, FTP, and more. It's widely used in scripts and applications for interacting with APIs and fetching web content. Essentially, it acts as a client for making requests to servers 

cURL using `--location`:
```zsh
curl --location 'https://app.domain.com.br/api/public/resources' | json_pp
```

cURL using `--header`:
```zsh
curl --location 'https://mydomain.com:8000/api.php' \
--header 'API-Key: MY-HEADER-HERE' \
--header 'nrParam: 101010101'
```

Get a webpage and store in a local file with a specific name:

```zsh
curl -o thatpage.html http://www.example.com/
```

curl supports both HTTP and SOCKS proxy servers, with optional authentication. It does not have special support for FTP proxy servers since there are no standards for those, but it can still be made to work with many of them. You can also use both HTTP and SOCKS proxies to transfer files to and from FTP servers.
Get an ftp file using an HTTP proxy named my-proxy that uses port 888:

```sh
curl -x my-proxy:888 ftp://ftp.example.com/README
```

### See more
- https://curl.se/
- https://curl.se/docs/tutorial.html

