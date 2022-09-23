<?php

function saveToTable(string $fileName, array $array)
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'caspar';
    $port = 3308;

    $conn = new mysqli($hostname, $username, $password, $database, $port);

    if ($conn->connect_error) {
        die("Erro na conexão: {$conn->connect_error}");
    }

    $json = json_encode($array);

    $sql = "INSERT INTO cnab_240 (file_name, cnab) VALUES ('{$fileName}', '{$json}')";

    if ($conn->query($sql) === false) {
        die("Erro na criação de registro: {$conn->error}");
    }

    $conn->close();
}
