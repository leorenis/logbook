# Prometheus commands
Start contaianer prometheus
_`docker run  --name prometheus --rm -d -p 9090:9090 -v $HOME/prometheus/prometheus.yml:/etc/prometheus/prometheus.yml prom/prometheus`_

  Remember, the path `$HOME...` must be the path for **instrumentation application** in your host.