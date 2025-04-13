<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();

$cliente = new Cliente($conexao);
$stmt = $cliente->read();
$clientes = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            padding: 8px 12px;
            border: 1px solid #4CAF50;
            border-radius: 4px;
        }
        a:hover {
            background-color: #4CAF50;
            color: white;
        }
        .actions a {
            margin-right: 10px;
        }
        .new-client {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($clientes as $cliente){ ?>
                <tr>
                    <td><?php echo $cliente['id']; ?></td>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['telefone']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['cpf']; ?></td>
                    <td class="actions">
                        <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                        <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <a class="new-client" href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
    </div>
</body>
</html>
