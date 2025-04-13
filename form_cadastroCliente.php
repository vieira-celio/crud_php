<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        p {
            margin: 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Cadastro de Cliente</h3>
        <form method="POST" action="cadastroCliente.php">
            <p><label for="nome">Nome:</label> <input type="text" id="nome" name="nome" required></p>
            <p><label for="telefone">Telefone:</label> <input type="text" id="telefone" name="telefone" required></p>
            <p><label for="email">Email:</label> <input type="email" id="email" name="email" required></p>
            <p><label for="cpf">CPF:</label> <input type="text" id="cpf" name="cpf" required></p>
            <p><button type="submit">Cadastrar</button></p>
        </form>
    </div>
</body>
</html>
