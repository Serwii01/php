<?php

require_once(__DIR__.'/src/bd.php');

$con = db_connect();


$usuarios = users($con);

dump($usuarios);