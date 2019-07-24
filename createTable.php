<?php

try {
    $conn = new PDO('mysql:host=localhost; dbname=projekat', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // kreiranje tabele
    $sql = "CREATE TABLE kontakt(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(30) NOT NULL,
        prezime VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        telefon VARCHAR(30) NOT NULL
    )";

    $conn -> exec($sql);
    echo 'Tabela je uspesno kreirana';

} catch(PDOException $e) {
    $e -> getMessage();
}

$conn = null;