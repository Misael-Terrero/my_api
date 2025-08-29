<?php
    # endpoint simple
    header("Content-Type: application/json");

    $method = $_SERVER['REQUEST_METHOD'];

    # Solo permitimos GET/POST para este ejemplo
    if($method == 'GET') {
        // Aquí podrías manejar la lógica para obtener usuarios
        require_once 'usuarios/get.php';
    } else if($method == 'POST') {
        // Aquí podrías manejar la lógica para crear un nuevo usuario
        require_once 'usuarios/post.php';
    } else {
        http_response_code(500); // ❌ 500 Internal Server Error
        echo json_encode(["message" => "Metodo no permitido"]);
    }