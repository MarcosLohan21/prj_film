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
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Criador</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .b {
            height: 152vh;
        }

        section {
            max-width: 600px;
            margin: 2em auto;
            padding: 1em;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        h2 {
            color: #007bff;
            line-height: 40px;
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>

<div class="container">
    <header>
        <div class="navbar-container">
            <nav>
                <img class="logo" src="../img/logo.png">
                <ul class="navbar-items">
                    <li><a href="../php/index.php">Home</a></li>
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
                    <li><a href=""> Sobre o Criador</a></li>
                    <li><a href="./redes.php">Redes Sociais</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>

<body class="b">


    <section>
        <h2>Marcos Lohan</h2>
        <p>
        <h3>Idade 18 anos</h3>especialização em diversos cursos como <h3>Tecnologia da informação</h3>
        <h3>Redes e Banco de Dados</h3>
        <h3>Programação em JavaScript<h3>
                <h3>HTML<h3>CSS</h3>
                    <h3>
                        <h3>C#</h3>
                        <h3>C++</h3>
                        <h3>Informática para Internet</h3>
                        <h3>CorelDraw</h3>
                        </p>

                        <h2>Projetos Anteriores</h2>
                        <p>
                        <h3>SportsLife</h3> Página web desenvolvidas para a venda e comércio de Artigos esportivos</p>
                        <p>
                        <h3>SmartTech</h3> Página web desenvolvidas para a venda e comércio de Artigos de Tecnologia</p>
                        <p>
                        <h3>Aplicativo para Automatização de digitação de apostilas</h3>
                        </p>

                        <h2>Habilidades e Competências</h2>
                        <ul>
                            <li>
                                <h3>Desenvolvimento Web</h3> Experiência sólida em HTML, CSS, JavaScript, e frameworks como React e Angular.
                            </li>
                            <li>
                                <h3>Programação Backend:</h3> Conhecimento em linguagens como Node.js e Python, com ênfase em construção de APIs eficientes.
                            </li>
                            <li>
                                <h3>Banco de Dados:</h3> Proficiente em SQL e experiência em design e otimização de bancos de dados MySQL e MongoDB.
                            </li>
                            <li>
                                <h3>UI/UX Design:</h3> Capacidade de criar interfaces intuitivas e atraentes, combinando design estético com usabilidade eficiente.
                            </li>
                            <li>
                                <h3>Gerenciamento de Projetos:</h3> Experiência em metodologias ágeis, garantindo entregas pontuais e satisfação do cliente.
                            </li>
                            <li>
                                <h3>Análise de Dados:</h3> Familiaridade com ferramentas como Python, Pandas e Matplotlib para análise e visualização de dados.
                            </li>
                            <li>
                                <h3>Comunicação:</h3> Habilidade efetiva na comunicação, trabalhando colaborativamente em equipes multidisciplinares.
                            </li>
                        </ul>

                        <h2>Filosofia de Trabalho</h2>
                        <p>Como criador, minha abordagem para lidar com projetos é fundamentada em alguns princípios centrais que refletem meu compromisso com a excelência e a satisfação do cliente.</p>

                        <h3>Colaboração Proativa</h3>
                        <p>Acredito na importância da colaboração proativa com meus clientes. Busco entender profundamente suas necessidades e objetivos, trabalhando em estreita parceria para desenvolver soluções que atendam não apenas às expectativas, mas também superem as mesmas.</p>

                        <h3>Inovação Constante</h3>
                        <p>Sou apaixonado por inovação e estou sempre atualizado com as últimas tendências e tecnologias. Minha filosofia inclui a busca constante pela inovação, incorporando novas ideias e práticas para criar soluções modernas e eficientes.</p>

                        <h3>Transparência e Comunicação Clara</h3>
                        <p>A transparência é fundamental para o sucesso de qualquer projeto. Estabeleço uma comunicação clara e aberta, mantendo meus clientes informados sobre o progresso, desafios e decisões importantes durante todo o processo.</p>

                        <h3>Compromisso com a Qualidade</h3>
                        <p>A qualidade é um pilar central em todos os meus projetos. Desde a concepção até a implementação, mantenho um compromisso rigoroso com os mais altos padrões de qualidade, garantindo que o resultado final atenda e supere as expectativas.</p>

                        <h3>Adaptação Contínua</h3>
                        <p>O ambiente digital está em constante evolução, e minha abordagem inclui uma mentalidade de adaptação contínua. Estou aberto a ajustes e melhorias ao longo do ciclo de vida do projeto para garantir que as soluções entregues estejam alinhadas com as necessidades dinâmicas do mercado.</p>

    </section>

</body>

</html>