<?php
session_start();

if(!$_SESSION['username']) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
