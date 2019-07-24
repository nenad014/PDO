<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1; dbname=projekat', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Uspesno ste povezani na bazu!';
} catch(PDOException $e) {
    $e -> getMessage();
}

$conn = null;