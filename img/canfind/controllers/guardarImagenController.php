<?php

$data = json_decode(file_get_contents("php://input"));


$file64 = $data->imagen64;
$nameFile = $data->nameFile;


$file = base64_decode($file64);



file_put_contents('resources/Img/Mascotas/' . $nameFile .'.jpg', $file); 

echo "ok";