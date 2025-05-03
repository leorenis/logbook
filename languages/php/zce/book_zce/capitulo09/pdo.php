<?php
$pdo = new \PDO('mysql:host=127.0.0.1;dbname=db_zce', 'root', '', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
var_dump($pdo::getAvailableDrivers());