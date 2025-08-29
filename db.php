<?php

    function connectDB() {
        try {
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=localhost;dbname=my_api;charset=utf8", 'root', '');
            
            // Set error mode to exceptions
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle connection errors
            die("Error de conexion" . $e->getMessage());
        }

        return $pdo;
    }