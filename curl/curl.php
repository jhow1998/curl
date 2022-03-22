<?php

//inicia o curl
$curl = curl_init();

$headers = [
    'Authorization: Bearer 10301230123012301230112',
    'Content-Type: application/json'
];


//POST

$post = [
    'nome' => 'joseph robert',
    'sobrenome' => 'carvalho'
];

//json
$json = json_encode($post);


//define as configuraçoes
curl_setopt_array($curl,[
    CURLOPT_URL             => "http://localhost/curl/curl/api.php",
    CURLOPT_CUSTOMREQUEST   => 'POST',
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_HTTPHEADER      => $headers,
    CURLOPT_POSTFIELDS      => $json
]);

//executa a requisição
$response = curl_exec($curl);
$array = json_decode($response,true);

print_r($array);

//fecha a conexão
curl_close($curl);

//imprimi o resustado da requisição
echo $response;