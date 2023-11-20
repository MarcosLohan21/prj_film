<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes de Marte</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <div class="container">
        <header>
            <div class="navbar-container">
                <nav>
                    <a href="./../html/planos.html"><img class="logo" src="../img/logo.png" </a>
                        <ul class="navbar-items">
                            <li><a href="../html/planos.html">Planos</a></li>
                            <li><a href="../php/register.php" class="default-btn">Registra-se</a></li>
                        </ul></b>
                </nav>
            </div>
    </div>
    <style>
        body,
        textarea,
        main {
            height: 90vh;
        }

        .navbar-items {
            z-index: 0;
            position: absolute;
            right: 0;
            top: 0;
            margin: 0;
            height: 80px;
            line-height: 80px;
            list-style: none;
        }

        .background {
            display: flex;
        }


        .login-container {
            position: absolute;
            top: 59%;
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
            align-items: center;
            /* Centralizar no eixo horizontal */
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 35px;
            margin-right: 10%;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: inline-block;
            margin-bottom: 10px;
            line-height: 5px;
        }

        .input-group1 label {
            display: inline-block;
            margin-bottom: 10px;
            line-height: 5px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .input-group input {
            color: #fff;
            background-color: #4a20ae;
            padding: 10px;
            width: 82%;
            border-radius: 3px;
            border: 1px solid #ae5fcd;
        }

        .input-group1 input {
            color: #fff;
            background-color: #4a20ae;
            padding: 10px;
            width: 74%;
            border-radius: 3px;
            border: 1px solid #ae5fcd;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        button {
            padding: 10px 30px 10px 30px;
            border: none;
            border-radius: 3px;
            background-color: #5821d6;
            color: #fff;
            cursor: pointer;
            margin-right: 10%;
            transition: background-color 0.3s;

        }

        button:hover {
            background-color: #0056b3;
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

        <div class="login-container">
            <form action="testLogin.php" method="POST" class="login-form">
                <h2>Login</h2>
                <div class="input-group" <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group1">
                    <label for="Senha">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" id="submit" name="submit">Login</button>
            </form>
        </div>
    </main>

</html>
</body>

</html>