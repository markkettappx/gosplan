<?php

include 'index.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$dia = $_POST['dia'];

$informacion = $_POST['informacion'];

file_put_contents($dia, $informacion);

$dia = file_get_contents($dia);

echo $dia;

}

?>
