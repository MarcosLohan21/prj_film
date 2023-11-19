<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
    {

        include_once('config.php');
        $username = $_POST['username'];
        $password = $_POST['password'];

        //print_r('Username: ' . $username);
        //print_r('<br>');
        //print_r('Password: ' . $password);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$username' and senha = '$password'";

        $result = $conn->query($sql);

        //print_r($result);
        if(mysqli_num_rows($result) < 1)
        {
            unset ($_SESSION['usuario']);
            unset ($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $username;
            $_SESSION['senha'] = $password;
            header('Location: index.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>