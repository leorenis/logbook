## Grafana k6
 Grafana k6 is an open-source, developer-friendly, and extensible load testing tool. k6 allows you to prevent performance issues and proactively improve reliability.


k6 is a modern load-testing tool, built on [our years of experience](https://github.com/grafana/k6#:~:text=our%20years%20of%20experience) in the performance and testing industries. It's built to be powerful, extensible, and full-featured. The key design goal is to provide the best developer experience.


Its core features are:

- Configurable load generation. Even lower-end machines can simulate lots of traffic.
- Tests as code. Reuse scripts, modularize logic, version control, and integrate tests with your CI.
- A full-featured API. The scripting API is packed with features that help you simulate real application traffic.
- An embedded JavaScript engine. The performance of Go, the scripting familiarity of JavaScript.
- Multiple Protocol support. HTTP, WebSockets, gRPC, Browser, and more.
- Large extension ecosystem. You can extend k6 to support your needs. And many people have already shared their extensions with the community!
- Flexible metrics storage and visualization. Summary statistics or granular metrics, exported to the service of your choice.
- Native integration with Grafana cloud. SaaS solution for test execution, metrics correlation, data analysis, and more.

This is what load testing looks like in the 21st century.

```javascript
import http from "k6/http";
import { check, sleep } from "k6";

// Test configuration
export const options = {
  thresholds: {
    // Assert that 99% of requests finish within 3000ms.
    http_req_duration: ["p(99) < 3000"],
  },
  // Ramp the number of virtual users up and down
  stages: [
    { duration: "30s", target: 15 },
    { duration: "1m", target: 15 },
    { duration: "20s", target: 0 },
  ],
};

// Simulated user behavior
export default function () {
  let res = http.get("https://quickpizza.grafana.com");
  // Validate response status
  check(res, { "status was 200": (r) => r.status == 200 });
  sleep(1);
}
```

### See more
- https://k6.io/
- https://github.com/grafana/k6/
- https://grafana.com/docs/k6/latest/

