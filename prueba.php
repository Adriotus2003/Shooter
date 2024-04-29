<?php
$data = array('hecho' => false, 'mensaje' => "Saca");
Header('Content-Type: application/json');
echo json_encode($data);
exit();

?>