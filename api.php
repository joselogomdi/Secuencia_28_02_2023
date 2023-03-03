<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    
    $nombre = (string) "José Luis Gómez Díaz";
    $edad = (int) 44;
    $altura = (double) 1.86;
    $esProfesor = (boolean) true;
    
    $pasaTiempo = (array) [
        "Ajedrez",
        "Escuchar música",
        "Aprender diferentes cosas",
        "Leer",
    ];

    $vehiculo = (object) [
        "Tipo de vehículo" => "Carro",
        "Color" => "Gris",
        "Llantas" => 4,
        "Frenos" => true,
        "Kilometraje" => "No sé..."
    ];
    
    $json = (object) [];
    $json->NOMBRE = $nombre;
    $json->EDAD = $edad;
    $json->ALTURA = $altura;
    $json->ESPROFESOR = $esProfesor;
    $json->PASATIEMPO = $pasaTiempo;
    $json->VEHICULO = $vehiculo;
    $json->SERVER = $_SERVER['HTTP_HOST'];

    echo json_encode($json, JSON_PRETTY_PRINT);
?>
