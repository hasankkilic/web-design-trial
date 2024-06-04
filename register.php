<?php
include('db.php'); // Veritabanı bağlantısı

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // Kullanıcı kaydetme
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $username, $email, $password);
    if ($stmt->execute()) {
        echo 'Kayıt başarılı';
        // Burada e-posta ile onay gönderme işlemi yapılabilir.
    } else {
        echo 'Kayıt başarısız';
    }
}
?>
