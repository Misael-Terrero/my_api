<?php
// Database configuration
require_once 'db.php';

$pdo = connectDB();

$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

http_response_code(200); // ✅ 200 OK
echo json_encode($users);

