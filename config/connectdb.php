<?php
    $dsn = 'mysql:host=localhost;dbname=stidatabank;';
    $user = 'root';
    $pass = '';

    try {
        $conn = new PDO ($dsn, $user, $pass);
    }
    catch (PDOException $e) {
        echo "Connection failed" .$e->getMesssage();
    }

    $con = mysqli_connect("Localhost","root","","stidatabank"); 
?>