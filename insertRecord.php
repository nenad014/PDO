<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1; dbname=projekat', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO kontakt(ime, prezime, email, telefon)
        VALUES ('Petar', 'Petrovic', 'ppetrovic@mail.com', '123111')";

    $conn -> exec($sql);
    echo 'Kontakt je dodat u tabelu.';
} catch(PDOException $e) {
    $e -> getMessage();
}

$conn = null;
