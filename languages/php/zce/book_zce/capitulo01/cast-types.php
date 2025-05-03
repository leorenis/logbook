<?php

$temperature="36.9 degrees";
(double)$temperature;
(int)$temperature;
(string)$temperature;

echo $temperature;
print "\n";
var_dump((double)$temperature);

var_dump((int)$temperature);

var_dump((string)$temperature);

$temperature="the temperature is 36.9 degrees";
echo $temperature;
print "\n";

var_dump((double)$temperature);

var_dump((int)$temperature);

var_dump((string)$temperature);