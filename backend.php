<?php

include "index.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

$date = date_create("".$_POST['ano']."-01-01");

echo "<br>";

echo "<div><form action='backend_dia.php' method='POST'><input type='hidden' name='dia' value='".date_format($date, 'd-m-Y: l')."'><input type='submit' value='".date_format($date, "d-m-Y: l")."'><input id='informacion' name='informacion'></form></div>";

echo "<br>";

for($i=0;$i<364;$i++){

date_add($date, date_interval_create_from_date_string("1 days"));

echo "<br>";

echo "<div><form action='backend_dia.php' method='POST'><input type='hidden' name='dia' value='".date_format($date, 'd-m-Y: l').".php'><input type='submit' value='".date_format($date,"d-m-Y: l")."'><input id='informacion' name='informacion'></form></div>";

include "".date_format($date,"d-m-Y: l").".php";

echo "<br>";

}

}

?>
