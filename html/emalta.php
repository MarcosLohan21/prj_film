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
            background-color: #0f0f0f;
            box-sizing: border-box;
            padding: 3em;
            /* Ajuste o espaçamento conforme necessário */
            color: #ffffff;
            text-decoration: none;
        }

        .specialties-container ul {
            background-image: linear-gradient(to bottom, rgb(85, 51, 165), rgb(39, 39, 134));
            display: flex;
            flex-direction: column;
            /* Alterado para colocar os itens verticalmente */
            align-items: center;
            /* Centraliza os itens horizontalmente */
            list-style: none;
            border-radius: 5rem;
            box-shadow: 0 0 10px rgba(132, 79, 255, 0.788);
        }

        .specialties-container ul li {
            text-align: center;
            padding: 20px;
            width: 100%;
            /* Garante que cada item ocupe 100% da largura da lista */
        }

        .specialties-container h3 {
            padding-bottom: 10px;
            font-size: 23px;
        }



        .resized-image {
            width: 260px;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }

        .image-container {
            border-radius: 15px;
            overflow: hidden;
            max-width: 100%;
            margin-bottom: 20px;
            /* Adiciona espaçamento entre os filmes */
        }

        .specialty-item {
            text-align: center;
            padding: 20px;
            position: relative;
        }

        .image-overlay-text {
            position: absolute;
            top: 97%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            background-color: var(--purple);
            padding: 5px;
            border-radius: 10%;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
            cursor: pointer;
            border: solid var(--stroke);
        }

        .image-overlay-text1 {
            position: absolute;
            top: 96%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            background-color: var(--purple);
            padding: 5px;
            border-radius: 10%;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
            cursor: pointer;
            border: solid var(--stroke);
        }

        .info {
            margin-top: 10px;
            text-decoration: none;
            text-align: left;
            background-color: #fff;
            color: var(--purple);
            border-radius: 15px;
            padding: 10px;
            line-height: 1.5;
            margin: 0 auto;
            width: 50%;
        }

        .streamer-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }

        .streamer {
            text-align: center;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .streamer img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .streamer h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .watch-button {
            background-color: var(--purple);
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .watch-button:hover {
            background-color: var(--activate);
        }
    </style>
</head>

<body class="b">
    <div class="container">
        <header>
            <div class="navbar-container">
                <nav>
                    <img class="logo" src="../img/logo.png">
                    <ul class="navbar-items">
                        <li><a href="../php/index.php">Home</a></li>
                        <li><a href="#">Em Alta</a></li>
                        <li><a href="./sair.php" class="default-btn">Sair</a></li>
                    </ul></b>
                </nav>
            </div>
    </div>

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
            <div class="specialties-wrapper">
                <ul class="specialties-list">
                    <li class="specialty-item">
                        <h3>Joker</h3>
                        <div class="image-container">
                            <a href="https://www.youtube.com/watch?v=t433PEQGErc" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/pt/6/63/Joker_%282019%29.jpg" alt="Joker Image" class="resized-image">
                                <p class="image-overlay-text">Assista o Trailer</p>
                            </a>
                            <div class="info">
                                <h1>Coringa</h1>
                                <p><strong>Data de Lançamento:</strong> 3 de outubro de 2019</p>
                                <p><strong>Gênero:</strong> Drama</p>
                                <p><strong>Duração:</strong> 2 horas e 2 minutos</p>
                                <p><strong>Direção:</strong> Todd Phillips</p>
                                <p><strong>Roteiro:</strong> Todd Phillips, Scott Silver</p>
                                <p><strong>Elenco:</strong> Joaquin Phoenix, Robert De Niro, Zazie Beetz</p>
                                <p><strong>Classificação:</strong> Não recomendado para menores de 16 anos</p>
                                <br>
                                <h2>Sinopse</h2>
                                <p>Arthur Fleck (Joaquin Phoenix) trabalha como palhaço para uma agência de talentos e enfrenta problemas mentais, precisando comparecer a uma agente social regularmente. Após ser demitido, Fleck reage de maneira violenta a uma provocação no metrô, resultando em assassinatos que desencadeiam um movimento popular contra a elite de Gotham City, liderada por Thomas Wayne.</p>
                                <br>
                                <h2>Avaliações</h2>
                                <p class="ratings"><strong>Imprensa:</strong> 4,2 (16 críticas)</p>
                                <p class="ratings"><strong>Usuários:</strong> 4,6 (5505 notas e 480 críticas)</p>
                                <p class="ratings"><strong>AdoroCinema:</strong> 5,0</p>

                                <div class="streamer-container">
                                    <div class="streamer">
                                        <img src="../img/prime_video_2023.jpeg" alt="Amazon Prime Video">
                                        <h3>Amazon Prime Video</h3>
                                        <p>Por assinatura</p>
                                        <a href="https://www.primevideo.com/offers/nonprimehomepage/ref=dv_web_force_root?_encoding=UTF8&language=pt_BR" class="watch-button">ASSISTIR</a>
                                    </div>

                                    <div class="streamer">
                                        <img src="../img/square social logo 400 x 400_0.png" alt="HBO Max">
                                        <h3>HBO Max</h3>
                                        <p>Por assinatura</p>
                                        <a href="https://www.hbomax.com/br/pt" class="watch-button">ASSISTIR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="specialty-item">
                        <h3>A Freira 2</h3>
                        <div class="image-container">
                            <a href="https://www.youtube.com/watch?v=0JZ8WGVSrwM" target="_blank">
                                <img src="../img/6.png" alt="A Freira 2 Image" class="resized-image">
                                <p class="image-overlay-text">Assista o Trailer</p>
                            </a>
                            <div class="info">
                                <h1>A Freira 2</h1>
                                <p><strong>Data de Lançamento:</strong> 7 de setembro de 2023</p>
                                <p><strong>Gênero:</strong> Terror</p>
                                <p><strong>Duração:</strong> 1h 49min</p>
                                <p><strong>Direção:</strong> Michael Chaves</p>
                                <p><strong>Roteiro:</strong> Ian B. Goldberg, Richard Naing</p>
                                <p><strong>Elenco:</strong> Taissa Farmiga, Jonas Bloquet, Storm Reid</p>
                                <p><strong>Classificação:</strong> Não recomendado para menores de 16 anos</p>
                                <br>
                                <h2>Sinopse</h2>
                                <p>A Freira 2 é o segundo capítulo da história de A Freira (2018), que faz parte do universo da franquia Invocação do Mal. No primeiro filme, após uma freira cometer suicídio em um convento na Romênia, o Vaticano envia o atormentado Padre Burke (Demián Bichir) e uma noviça, Irmã Irene (Taissa Farmiga), para investigar o ocorrido. Arriscando suas vidas, a fé e até suas almas, os dois descobrem um segredo profano no local, confrontando uma força do mal que assume a forma de uma freira demoníaca e transforma o convento em um campo de batalha espiritual. Agora, na continuação, anos após os acontecimentos do primeiro filme, um padre é assassinado e parece que o mal está se espalhando por toda a região. Novamente acompanhamos a Irmã Irene quando, após pensar ter escapado por pouco de Valak, a entidade demoníaca, ela é forçada a enfrentar o poderoso e macabro inimigo mais uma vez.</p>
                                <br>
                                <h2>Avaliações</h2>
                                <p class="ratings"><strong>Imprensa:</strong> 2,7 (5 críticas)</p>
                                <p class="ratings"><strong>Usuários:</strong> 3,2 (225 notas e 34 críticas)</p>
                                <p class="ratings"><strong>AdoroCinema:</strong> 2,5</p>

                                <div class="streamer-container">
                                    <div class="streamer">
                                        <img src="../img/Cinema-1.jpg" alt="HBO Max">
                                        <h3>Cinema</h3>
                                        <p>Em sessão</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <div class="specialty-item">
        <h3>Jogos Vorazes – A Cantiga Dos Pássaros e das Serpentes</h3>
        <div class="image-container">
            <a href="VER O TRAILER" target="_blank">
                <img src="../img/1344036588-20230920-jogos-vorazes-passaros-e-serpentes-poster-scaled-1.jpeg" alt="The Hunger Games: The Ballad of Songbirds and Snakes Image" class="resized-image">
                <p class="image-overlay-text">Ver o Trailer</p>
            </a>
            <div class="info">
                <h1>Jogos Vorazes – A Cantiga Dos Pássaros e das Serpentes</h1>
                <p><strong>Data de Lançamento:</strong> 15 de novembro de 2023</p>
                <p><strong>Gênero:</strong> Ficção Científica, Ação, Aventura</p>
                <p><strong>Duração:</strong> 2 horas e 38 minutos</p>
                <p><strong>Direção:</strong> Francis Lawrence</p>
                <p><strong>Roteiro:</strong> Michael Arndt, Michael Lesslie</p>
                <p><strong>Elenco:</strong> Tom Blyth, Rachel Zegler, Peter Dinklage</p>
                <p><strong>Classificação:</strong> Não recomendado para menores de 12 anos</p>
                <br>
                <h2>Sinopse</h2>
                <p>Antes de Katniss Everdeen, sua revolução e o envolvimento do 13 distrito, houve o Presidente Snow, ou melhor, Coriolanus Snow. A Cantiga dos Pássaros e das Serpentes é a história do ditador de Panem antes de chegar ao poder. Anos antes, Coriolanus Snow vivia na capital, nascido na grande casa de Snow, que não anda muito bem em popularidade e financeiramente. Ele se prepara para sua oportunidade de glória como um mentor dos Jogos. O destino de sua Casa depende da pequena chance de Coriolanus ser capaz de encantar, enganar e manipular seus colegas para conseguir mentorar o tributo vencedor. Foi lhe dado a tarefa humilhante de mentorar a garota tributo do Distrito 12. Os destinos dos dois estão agora interligados – toda escolha que Coriolanus fizer terá consequências dentro e fora do Jogo. Na arena, a batalha será mortal e a garota terá que sobreviver a cada segundo. Fora da arena, Coriolanus começa a se apegar a garota, mas terá que ter que qualquer passo que der, fará com que a menina e ele mesmo sofram de alguma maneira.</p>
                <br>
                <h2>Avaliações</h2>
                <p class="ratings"><strong>Usuários:</strong> 3,6 (36 notas e 7 críticas)</p>
                <p class="ratings"><strong>AdoroCinema:</strong> 3,5</p>

                <div class="streamer-container">
                    <div class="streamer">
                        <img src="../img/Cinema-1.jpg" alt="Cinema">
                        <h3>Cinema</h3>
                        <p>Em sessão</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </ul>
            </div>
        </section>








    </main>
</body>

</html>