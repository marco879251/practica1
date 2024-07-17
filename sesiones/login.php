<?php
session_start();
$users = array(
    "marco1" => "marco123",
    "maribel2" => "maribel1234"
);

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] == $password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Usuario o contraseña incorrectos');window.location.href='index.php';</script>";
}
?>
