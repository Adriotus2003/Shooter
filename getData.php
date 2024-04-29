<?php
include "dbConnection.php";
include "validate.php";

$userName = $_POST['userName'];

$sql = "SELECT experience, recordKills FROM usuario WHERE userName = '$userName'";
$result = $pdo->query($sql);
$values = $result->fetch();

if($result->rowCount() > 0)
{
    $data = array('hecho' => true, 'expe' => $values['experience'], 'record' => $values['recordKills']);
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}
else
{
    $data = array('hecho' => false, 'expe' => -1, 'record' => -1);
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

?>