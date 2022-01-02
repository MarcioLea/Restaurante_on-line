<?php
    declare(strict_types=1);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $experiencia = $_POST['experiencia'];
    $telefone = $_POST['telefone'];
    $funcao = $_POST['funcao'];
    $nascimento = $_POST['nascimento'];

    $con = require 'conectar.php';
    $sql = 'INSERT INTO cadastro(nome, email, experiencia, telefone, funcao, nascimento) VALUES(?, ?, ?, ?, ?, ?)';
    $prepare = $con->prepare($sql);

    $prepare->bindParam(1,$nome);
    $prepare->bindParam(2,$email);
    $prepare->bindParam(3,$experiencia);
    $prepare->bindParam(4,$telefone);
    $prepare->bindParam(5,$funcao);
    $prepare->bindParam(6,$nascimento);
   
    $prepare->execute();

?>