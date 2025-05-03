## SQL Map Tool

### Introduction
`sqlmap` is an open source penetration testing tool that automates the process of detecting and exploiting SQL injection flaws and taking over of database servers. It comes with a powerful detection engine, many niche features for the ultimate penetration tester and a broad range of switches lasting from database fingerprinting, over data fetching from the database, to accessing the underlying file system and executing commands on the operating system via out-of-band connections.


### Features
Full support for MySQL, Oracle, PostgreSQL, Microsoft SQL Server, Microsoft Access, IBM DB2, SQLite, Firebird, Sybase, SAP MaxDB, Informix, MariaDB, MemSQL, TiDB, CockroachDB, HSQLDB, H2, MonetDB, Apache Derby, Amazon Redshift, Vertica, Mckoi, Presto, Altibase, MimerSQL, CrateDB, Greenplum, Drizzle, Apache Ignite, Cubrid, InterSystems Cache, IRIS, eXtremeDB, FrontBase, Raima Database Manager, YugabyteDB, Aurora, OpenGauss, ClickHouse and Virtuoso database management systems.
[See More](https://sqlmap.org/)


### Installation
You can download the latest tarball by clicking [here](https://github.com/sqlmapproject/sqlmap/tarball/master) or latest [zipball](https://github.com/sqlmapproject/sqlmap/zipball/master) by clicking here.

Preferably, you can download sqlmap by cloning the Git repository:
```
git clone --depth 1 https://github.com/sqlmapproject/sqlmap.git sqlmap-dev
```

> sqlmap works out of the box with Python version 2.6, 2.7 and 3.x on any platform.


### Usage
To get a list of basic options and switches use:
```
python sqlmap.py -h
```

```
sqlmap -u http://127.0.0.1 --forms --tamper=space2comment --tables
```

#### Explanation
- **`-u [URL]`**  
  Specifies the target URL (e.g., `http://127.0.0.1`, `http://example.com`).

- **`--forms`**  
  Tells SQLMap to detect and test HTML form inputs for SQL injection points.

- **`--tamper=space2comment`**  
  Uses the `space2comment` tamper script, which replaces spaces with SQL comments (`/**/`) to bypass basic input filters or WAFs.

- **`--tables`**  
  After confirming SQL injection, it enumerates the database tables.

  
### See more
- https://sqlmap.org
- https://github.com/sqlmapproject/sqlmap