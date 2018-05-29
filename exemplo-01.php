<?php

$cep = "70275060";
$link= "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  # precisa dessa opção para funcionar com o https

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true); # o resultado vem como json, mas aquero que vire um array.

print_r($data);

?>