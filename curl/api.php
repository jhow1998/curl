<?php

//Método http

echo 'Método:';
echo $_SERVER['REQUEST_METHOD'];


//Headers
echo "<br><br>Headers:<br>";
$headers = getallheaders();
print_r($headers);

echo "<br><br>POST:<br>";
$input = file_get_contents('php://input');
$array = json_decode($input,true);
$_POST = !empty($array) ? $array : $_POST;
print_r($_POST);


$array =[
    'codigo' =>200,
    'sucesso' => true
];

echo json_encode($array);
