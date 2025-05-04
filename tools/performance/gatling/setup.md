## Gatling
Gatling is a load testing tool for web applications designed for DevOps and Continuous Integration. 

Gatling is a load- and performance-testing framework based on Scala, Akka and Netty. The first stable release was published on January 13, 2012.

In 2015, Gatling's founder, Stéphane Landelle, created a company (named "Gatling Corp"), dedicated to the development of the open-source project. According to Gatling Corp's official website.

Exemple: 
```javascript
export default simulation((setUp) => {

  const httpProtocol =
    http.baseUrl("https://computer-database.gatling.io")
      .acceptHeader("application/json")
      .contentTypeHeader("application/json");

  const myScenario = scenario("My Scenario")
    .exec(http("Request 1")
      .get("/computers/"));

  setUp(
    myScenario.injectOpen(constantUsersPerSec(2).during(60))
  ).protocols(httpProtocol);
});
```

### See more
- https://k6.io/
- https://en.m.wikipedia.org/wiki/Gatling_%28software%29

