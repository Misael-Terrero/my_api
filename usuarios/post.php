<?php
    // Database configuration
    require_once 'db.php';

    header("Content-Type: application/json");
        
    $data = json_decode(file_get_contents("php://input"), true);

    if(isset($data['name']) && isset($data['email'])) {
        $pdo = connectDB();
        $stmt = $pdo->prepare("INSERT INTO users (user_name, user_email) VALUES (:user_name, :user_email)");
        $stmt->bindParam(':user_name', $data['name']);
        $stmt->bindParam(':user_email', $data['email']);
        $stmt->execute();

        http_response_code(201); // ✅ 201 Created
        echo json_encode(["message" => "Usuario creado exitosamente"]);
    } else {
        http_response_code(400); // ❌ 400 Bad Request
        echo json_encode(["message" => "Datos incompletos"]);
    }