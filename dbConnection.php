<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=dbshotter', 'Adrian', 'SSonia0507.');
    //$pdo = new PDO('mysql:host=134.0.11.17;dbname=dbshooter', 'myamrshoot05', 'm4N9c0Y4');
    //$pdo = new PDO('mysql:host=sql202.infinityfree.com;dbname=if0_36442799_dbshooter', 'if0_36442799', '720GTfx8vi27Yqz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE , pdo::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e){
    echo "ERROR AL CONECTAR CON LA BASE DE DATOS " . $e->getMessage();
    exit();
}

?>