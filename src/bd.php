<?php

function db_connect() {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=login_dwes', 'root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e) {
        print "Lo sentimos, ha habido un error conectando a la base de datos.<br>";
        die();
    }
    return $dbh;
}

