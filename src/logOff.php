<?php
include "dbConnection.php";
include "validate.php";

$userName = $_POST['userName'];

$sql = "UPDATE usuario SET connected = false WHERE userName = '$userName'";
$result = $pdo->query($sql);

$data = array('hecho' => true, 'Usuario desconectado de BD');
Header('Content-Type: application/json');
echo json_encode($data);
exit();

?>