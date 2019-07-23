<?php

try {
    $conn = new PDO('mysql: host=localhost', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $sql = 'CREATE DATABASE projekat';
    $conn -> exec($sql);
    echo 'Baza je uspesno kreirana!';
} catch(PDOException $e) {
    $e->getMessage();
}

$conn = null;