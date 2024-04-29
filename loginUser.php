<?php
include "dbConnection.php";
include "validate.php";

$userName = $_POST['userName'];
$password = hash("sha256", $_POST['password']);

//PIENSO. Por aqui podemos comprobar el estado de conectado.
$sql = "SELECT userName FROM usuario WHERE userName = '$userName' AND password = '$password'";
$result = $pdo->query($sql);
//PIENSO. Por aqui sacar los niveles con una consulta en caso de ser correcto.

if($result->rowCount() > 0)
{
    $sql = "UPDATE usuario SET connected = true WHERE userName = '$userName'";
    $result = $pdo->query($sql);

    $data = array('hecho' => true, 'mensaje' => "Bienvenido $userName");
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}
else
{
    $data = array('hecho' => false, 'mensaje' => "Error. Datos incorrectos.");
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

?>