<?php

try {
    $conn = new PDO('mysql:host=localhost; dbname=projekat', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn -> prepare('INSERT INTO kontakt(ime, prezime, email, telefon)
                            VALUE (:ime, :prezime, :email, :telefon)');
    $stmt -> bindParam(':ime', $ime);
    $stmt -> bindParam(':prezime', $prezime);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':telefon', $telefon);

    // dodavanje reda
    $ime = 'Marko';
    $prezime = 'Markovic';
    $email = 'marko.markovic@mail.com';
    $telefon = '343434';
    $stmt -> execute();
    echo 'Novi kontakt je dodat';
} catch(PDOException $e) {
    $e -> getMessage();
}

$conn = null;