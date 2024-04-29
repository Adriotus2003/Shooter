<?php
include "dbConnection.php";
include "validate.php";

$userName = $_POST['userName'];
$password = hash("sha256", $_POST['password']);
//$connected = $_POST['connected'];

$sql = "SELECT userName FROM usuario WHERE userName = '$userName'";
$result = $pdo->query($sql);

if($result->rowCount() > 0)
{
    $data = array('hecho' => false, 'mensaje' => "Error, nombre de usuario ya existente.");
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}
else
{
    $sql = "INSERT INTO usuario SET userName = '$userName', password = '$password'";
    $pdo->query($sql);

    $data = array('hecho' => true, 'mensaje' => "Usuario Nuevo Creado.");
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

?>