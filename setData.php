<?php
include "dbConnection.php";
include "validate.php";

$userName = $_POST['userName'];
$experience = $_POST['experience'];
$recordKills = $_POST['recordKills'];

$sql = "SELECT userName FROM usuario WHERE userName = '$userName' AND recordKills < $recordKills";
$result = $pdo->query($sql);

if($result->rowCount() > 0)
{
    $sql = "UPDATE usuario SET experience = '$experience', recordKills = '$recordKills' WHERE userName = '$userName'";
    $result = $pdo->query($sql);

    $data = array('hecho' => true, 'Expe y record actualizados');
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}
else
{
    $sql = "UPDATE usuario SET experience = '$experience' WHERE userName = '$userName'";
    $result = $pdo->query($sql);

    $data = array('hecho' => true, 'Expe actualizada');
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

?>