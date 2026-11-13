<?php

require_once(__DIR__.'/src/bd.php');
include(__DIR__.'/src/functions.php');


//conectar a la bd
$con = db_connect();


//extraer los usuarios de la bd
$usuarios = users($con);
dump($usuarios);