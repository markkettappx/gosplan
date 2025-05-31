<?php

include 'index.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$dia = $_POST['dia'];

file_put_contents( $dia, "%");

}

?>
