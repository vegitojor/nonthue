<?php

$data = json_decode(file_get_contents("php://input"));


$file64 = $data->imagen64;
$nameFile = $data->nameFile;
$idMascota = $data->idMascota;
var_dump($idMascota);
$file = base64_decode($file64);



file_put_contents('resources/Img/Encontrados/' . $nameFile .'.jpg', $file); 
