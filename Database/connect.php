<?php
$conn = pg_connect("host=192.168.191.20 dbname=workshop2 user=postgres password=afidanish");
if (!$conn) {
    echo "An error occurred.<br>";
    exit;
} else {
    echo "Nadia Connected";
}
?>