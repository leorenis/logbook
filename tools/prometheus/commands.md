# Prometheus commands
Start contaianer prometheus

_`docker run  --name prometheus --rm -d -p 9090:9090 -v $HOME/prometheus/prometheus.yml:/etc/prometheus/prometheus.yml prom/prometheus`_

E.g file `prometheus.yml`

```
global:
  scrape_interval: 5s

scrape_configs:
  - job_name: prometheus
    honor_timestamps: true
    scrape_interval: 15s
    scrape_timeout: 10s
    metrics_path: /metrics
    scheme: http
    static_configs:
      - targets: ['localhost:9090']
  - job_name: classRoomLRS
    static_configs:
      - targets: ['192.168.0.16:3000']
```
  **Remember**, the path `$HOME...` must be the path for **instrumentation application** in your host.