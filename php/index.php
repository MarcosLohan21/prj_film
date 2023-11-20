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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes de Marte</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../css/style.css">
    <style>
        body,
        textarea,
        main {
            height: 90vh;
        }

        .b {
            height: 70vh;
        }

        .main-banner {
            padding: 10em 0;
            text-align: center;
            background-image: linear-gradient(to bottom, rgb(85, 51, 165), rgb(39, 39, 134));
        }

        .teste {
            padding: 20px;
            background-color: #d3d3d323;
            color: #fff;
            width: fit-content;
            margin: auto;
            padding: 1.7rem;
            border-radius: 1.6rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.514);
        }

        .teste u {
            text-decoration: none;
        }

        .MainDefault-btn {
            padding: 15px 20px;
            background-color: var(--purple);
            border-radius: 5px;
            border: solid var(--stroke);
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        .MainDefault-btn:hover {
            background-color: var(--activate);
            color: #d3d3d3;
        }

        .specialties-container {
            box-shadow: #0f0f0f 3px 3px 10px 19px;
            width: 100%;
            height: 390px;
            background-color: #0f0f0f;
            box-sizing: border-box;
            padding: 8em 24em;
            color: #ffffff;
        }

        .specialties-container ul {
            background-image: linear-gradient(to bottom, rgb(85, 51, 165), rgb(39, 39, 134));
            display: flex;
            margin: 0 auto;
            padding: 10px 10px 10px 10px;
            list-style: none;
            border-radius: 5rem;
            box-shadow: 0 0 10px rgba(132, 79, 255, 0.788);
        }

        .specialties-container ul li {
            text-align: center;
            padding: 20px;
        }

        .specialties-container h3 {
            padding-bottom: 10px;
            font-size: 23px;
        }
    </style>
</head>


<div class="container">
    <header>
        <div class="navbar-container">
            <nav>
                <img class="logo" src="../img/logo.png">
                <ul class="navbar-items">
                    <li><a href="#">Home</a></li>
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
                    <li><a href="./redes.php">Redes Sociais</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>

<body class="b">
    <main>

        <div class="main-banner">
            <div class="teste">
                <h1>Filmes de Marte</h1>
                <?php
                echo "Bem vindo <u>$logado</u>";
                ?>
            </div>
        </div>
        <section class="specialties-container">
            <ul>
                <li>
                    <h3>Seguranças</h3>
                    <p>O Filmes de Marte se destaca não apenas pela vasta coleção de filmes e séries, mas também pela
                        sua firme preocupação com a segurança de seus usuários. Com uma plataforma robusta e tecnologia
                        avançada de proteção de dados, o site prioriza a privacidade de quem o utiliza.</p>
                </li>
                <li>
                    <h3>Velocidade</h3>
                    <p>O Filmes de Marte é conhecido não apenas por sua vasta biblioteca de entretenimento, mas também
                        por sua velocidade impecável. Com uma infraestrutura otimizada e servidores de alta performance,
                        o site oferece uma experiência de streaming rápida e fluida aos seus usuários.</p>
                </li>
                <li>
                    <h3>Suporte</h3>
                    <p>O suporte ao usuário no Filmes de Marte é tão essencial quanto a própria seleção de filmes e
                        séries. Com uma equipe comprometida e acessível, o site prioriza o atendimento ágil e eficiente
                        para garantir a melhor experiência possível aos seus usuários.</p>
                </li>
            </ul>
        </section>
    </main>
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