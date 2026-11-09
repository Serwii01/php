<?php

require_once(__DIR__.'/src/bd.php');

$con = db_connect();


function registro(PDO $pdo){
    $sql = "INSERT INTO usuarios (email, nombre, contrasena)";

    return $pdo->query($sql)->fetchAll();
}