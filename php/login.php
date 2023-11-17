<?php
session_start();
include('conexao.php');

if(empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: login.html');
    exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT id, username FROM usuarios WHERE username = '$username' AND senha = '$password'";
$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.html');
    exit();
}
?>
