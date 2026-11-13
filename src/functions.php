<?php

function dump($var){
    echo '<pre>'.print_r($var,1).'</pre>';
}


function users(PDO $pdo){
    $sql = 'SELECT * FROM USUARIOS';

    return $pdo->query($sql)->fetchAll();
}

?>