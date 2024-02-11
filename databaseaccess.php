<?php


$Nome_host = "localhost";
$Nome_utente = "root";
$password = "vu-86s7qLe-bDRW@";
$NomeDb = "librery_app";

$conn = new mysqli($Nome_host, $Nome_utente, $password, $NomeDb);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

