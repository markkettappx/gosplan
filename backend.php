<?php

include "index.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

$date = date_create("".$_POST['ano']."-01-01");

echo "<br>";

echo "<div>".date_format($date, "d-m-Y: l")."</div>";

echo "<br>";

for($i=0;$i<364;$i++){

date_add($date, date_interval_create_from_date_string("1 days"));

echo "<br>";

echo "<div>".date_format($date,"d-m-Y: l")."</div>";

include "".date_format($date,"d-m-Y: l").".php";

echo "<br>";

}

}

?>
