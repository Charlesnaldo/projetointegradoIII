<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif, sans-serif;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 7px;
        }
        
        button {
            width: 87%;
            padding: 10px;
            margin: 20px 0;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #429cfc;
        }
    </style>
</head>
<body>
    <form action="validalogin.php" method="post">
        <div class="login-container">
            <h2>SEJA BEM VINDO!</h2>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <input type="email" name="email" placeholder="Digite seu E-mail" required>
            <input type="password" name="senha" placeholder="Digite sua Senha" required>
            <button type="submit">LOGIN</button>
        </div>
    </form>
</body>
</html>
