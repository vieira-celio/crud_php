<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);
    $cliente->setId($_POST['id']);
    $cliente->setNome($_POST['nome']);
    $cliente->setCPF($_POST['cpf']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);

    
        if ($cliente->update()) {
            echo "Cliente atualizado.";
            header("Refresh:3;url=listarCliente.php");
        }else {
            echo"Erro.";
        }
?>
