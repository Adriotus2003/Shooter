<?php
$connectionPass = $_POST["connectionPass"];
//$os = $_POST["os"];
//$platformPass = $_POST["platformPass"];

//Si la contraseña de la versión del juego es diferente al php de la db
if($connectionPass != "^Do8nw&ZK^tZhhK!&?ST#L"){
    //if($os == "ios" && $platformPass != "#2#ckSvxzp6Ao!TF&gC#pL"){
        $data = array('hecho' => false, 'mensaje' => "Autentificacion fallida.");
        Header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    //}
}
/*else
{
    $data = array('hecho' => false, 'mensaje' => "Autentificacion fallida.");
    Header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}*/

?>