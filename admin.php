<?php
session_start();
if ($_POST['username'] == 'a' && $_POST['password'] == 'a') {
    $_SESSION['admin'] = 'hasan';
    echo 'Admin girişi başarılı';
} else {
    echo 'Admin girişi başarısız';
}
?>
