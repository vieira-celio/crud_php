<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();
    
    $cliente = new Cliente($conexao);

    $cliente->setId($_GET['id']);
    $stmt = $cliente->consultar();
    $clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Atualizar Cliente</h1>
    <form method="POST" action="atualizaCliente.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($clienteSelecionado['id']); ?>">
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($clienteSelecionado['nome']); ?>" required>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($clienteSelecionado['telefone']); ?>" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($clienteSelecionado['email']); ?>" required>
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($clienteSelecionado['cpf']); ?>" required>
        
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
