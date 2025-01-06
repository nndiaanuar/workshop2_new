<?php
$conn = pg_connect("host=localhost dbname=workshop2 user=postgres password=afidanish");
if (!$conn) {
    echo "An error occured.<br>";
    exit;
}

?>
