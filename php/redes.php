<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Sociais</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        b {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-items {
            z-index: 0;
            position: absolute;
            right: 0;
            top: 0;
            margin: 0;
            height: 80px;
            line-height: 80px;
            margin-right: 47%;
            list-style: none;
        }

        .navbar-items li {
            display: inline-block;
            text-transform: initial;
            margin-left: 15px;
        }

        .navbar-items li a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-weight: bold;
        }

        .navbar-items li a:hover {
            color: #d3d3d3;
        }

        .navbar-lv {
            z-index: 0;
            position: absolute;
            right: 0;
            top: 0;
            margin: 0;
            height: 80px;
            line-height: 80px;
            color: #fff;
        }

        .social-icons {
            text-align: center;
            margin-top: 10%;
        }

        .social-icons img {
            width: 150px;
            height: 150px;
            margin-top: 50px;
            margin: 15px;
            cursor: pointer;
        }

        .whatsapp a {
            text-align: center;
            font-size: larger;
            color: #f0f0f0;
            cursor: default;
            text-decoration: none;
        }
    </style>
</head>

<div class="container">
    <header>
        <div class="navbar-container">
            <nav>
                <img class="logo" src="../img/logo.png">
                <ul class="navbar-items">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="../html/emalta.php">Em Alta</a></li>
                </ul></b>
                <ul class="navbar-lv"><b>
                        <li><a href="./sair.php" class="default-btn">Sair</a></li>
                </ul></b>
            </nav>
        </div>
</div>
<div class="container2">
    <header>
        <div class="navbar-container2">
            <nav>
                <ul class="navbar-items2">
                    <li><a href="https://www.adorocinema.com">Site de filmes recomendado</a></li>
                    <li><a href="./sobcr.php"> Sobre o Criador</a></li>
                    <li><a href="#">Redes Sociais</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>

        <body class="b">

            <div class="social-icons">
                <a href="https://www.facebook.com/marcos.lohan.5817" target="_blank">
                    <img src="../img/Facebook_f_logo_(2019).svg.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/sued.sat4n/" target="_blank">
                    <img src="../img/logo_instagram.png" alt="Instagram">
                </a>
                <div class="whatsapp">
                    <a href="https://w.app/h34vt5?widget" target="_blank">
                        <img src="../img/QRCODEWHAT.png" alt="WhatsApp">
                        <b>
                            <p>Whatsapp QRCODE</p>
                        </b>
                    </a>
                </div>
            </div>
            <script type="text/javascript">
                window.onload = function() {
                    (function(d, script) {
                        script = d.createElement('script');
                        script.type = 'text/javascript';
                        script.async = true;
                        script.src = 'https://w.app/widget-v1/h34vt5.js';
                        d.getElementsByTagName('head')[0].appendChild(script);
                    }(document));
                };
            </script>
        </body>

</html>