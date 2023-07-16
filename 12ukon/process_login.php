<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username === 'admin' && $password === 'admin123') {
        
        session_start();
        $_SESSION['username'] = $username;
        header('Location: pasien.php');
        exit();
    } else if ($username === 'user' && $password === 'user123') {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: user.php');
        exit();
    }
} else {
    
    header('Location: login.php?error=2');
    exit();
}
?>