<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes de Marte</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">

    <!-- A tag div abaixo estava fora do head, corrigi para ficar dentro do body -->
    <div class="container">
        <header>
            <div class="navbar-container">
                <nav>
                    <a href="#"><img class="logo" src="../img/logo.png" </a>
                        <ul class="navbar-items">
                            <li><a href="../html/planos.html">Planos</a></li>
                            <li><a href="../php/login.php" class="default-btn">Login</a></li>
                        </ul></b>
                </nav>
            </div>
    </div>
    <style>
        .background {
            display: flex;
        }

        .login-container {
            position: absolute;
            top: 55%;
            left: 65%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.616);
            border: 2px solid var(--purple);
            padding: 90px;
            margin: 10px;
            border-radius: 15%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;

        }

        .login-form {
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 35px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            color: #fff;
            background-color: #4a20ae;
            padding: 10px;
            width: 100%;
            border-radius: 3px;
            border: 1px solid #ae5fcd;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #5821d6;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 15px;
        }

        button:hover {
            background-color: #845cde;
        }

        .card {
            position: fixed;
            top: 20px;
            right: 38%;
            width: auto;
            color: #fff;
            padding: 15px;
            overflow-y: auto;
            z-index: 999;
            border-radius: 15px 15px 15px 15px;
            text-align: center;

        }

        .LoginImg {
            position: absolute;
            width: 50em;
            right: 62%;
            top: 20%;
            filter: invert(90);
        }
    </style>

</head>

<head>
    <title>Login</title>
</head>

<body>
<img class="LoginImg" src="../img/logo.png">
    <main class="background">
        <div class="card">
            <?php
            session_start();

             // Verifica se o formulário foi enviado
            if (isset($_POST['submit'])) {
                // Inclui o arquivo de configuração do banco de dados
                include_once('config.php');
                 // Obtém os valores do formulário
                $Username = $_POST['username'];
                $Email = $_POST['email'];
                $Telefone = $_POST['tel'];
                $Password = $_POST['password'];
                $date = $_POST['date'];

                // Calcular a idade
                $dob = new DateTime($date);
                $agora = new DateTime();
                $idade = $agora->diff($dob)->y;
                echo "Idade: " . $idade;

                // Prepara e executa a consulta para verificar se o usuário já existe
                $userExistsQuery = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? LIMIT 1");
                $userExistsQuery->bind_param('s', $Username);
                $userExistsQuery->execute();
                $result = $userExistsQuery->get_result();

                // Verifica se o usuário já existe

                if ($result->num_rows > 0) {
                    echo "<br>Nome de usuário já cadastrado. Escolha outro nome de usuário.";
                } else {
                    // Hash da senha usando password_hash
                    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

                    // Inserir novo usuário
                    $insertQuery = $conn->prepare("INSERT INTO usuarios (usuario, senha, email, data_nasc, telefone) VALUES (?, ?, ?, ?, ?)");
                    $insertQuery->bind_param('sssss', $Username, $hashedPassword, $Email, $date, $Telefone);
                    $insertResult = $insertQuery->execute();

                    // Verifica o resultado da inserção
                    if ($insertResult) {
                        echo "Cadastro realizado com sucesso!";
                    } else {
                        echo "Erro ao cadastrar. Por favor, tente novamente.";
                    }
                }
            }
            ?>


        </div>
            <!-- Formulário de registro -->
        <div class="login-container">
            <form action="register.php" method="POST" class="login-form">
                <h2>Se registre aqui!</h2>
                <div class="input-group">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required placeholder="gmailficticio@gmail.com">
                </div>
                <div class="input-group">
                    <label for="Telefone">Telefone</label>
                    <input type="tel" id="tel" name="tel" required placeholder="Seu número com (ddd) aqui">
                </div>
                <div class="input-group">
                    <label for="Senha">Senha</label>
                    <input type="password" id="password" name="password" required placeholder="**********">
                </div>
                <div class="input-group">
                    <label for="Data-nasc">Data de Nascimento</label>
                    <input type="date" id="date" name="date" required>

                </div>

                <button type="submit" id="submit" name="submit">Enviar</button>
            </form>
        </div>
    </main>

</html>
</body>

</html>