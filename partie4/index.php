<?php

// exo 1
echo "Today is " . date("d/m/Y") . "<br>";

// exo 2
echo "Today is " . date("d-m-y") . "<br>";

// exo 3
$currentDate = date('l j F Y');
echo $currentDate . "<br>";

// exo 4
$date = date_create();
echo date_timestamp_get($date) . "<br>";

$d=mktime(15, 0, 0, 8, 2, 2016);
echo date("l j F Y H\Hi ", $d) . "<br>";

// exo 5
$now = time(); // or your date as well
$your_date = strtotime("2016-05-16");
$datediff = $now - $your_date;

echo "le nombre de jour depuis 2016-05-16 est : " . round($datediff / (60 * 60 * 24)) . "<br>";

// exo 6

$now = strtotime("2016-03-01"); // or your date as well
$your_date = strtotime("2016-02-01");
$datediff = $now - $your_date;

echo "le nombre de jour dans le mois de fevrier 2016 est: " . round($datediff / (60 * 60 * 24)) . "<br>";

// exo 7

$now20 = mktime(0, 0, 0, date("m")  , date("d")+20, date("Y"));
echo date("l j F Y H\Hi ", $now20) . "<br>";

// exo 8

$now22 = mktime(0, 0, 0, date("m")  , date("d")-22, date("Y"));
echo date("l j F Y H\Hi ", $now22) . "<br>";

?>