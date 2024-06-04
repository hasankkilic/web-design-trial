<?php
session_start();
include('db.php'); // Veritabanı bağlantısı

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Kullanıcı doğrulama
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            echo 'Giriş başarılı';
        } else {
            echo 'Şifre yanlış';
        }
    } else {
        echo 'Kullanıcı bulunamadı';
    }
}
?>
