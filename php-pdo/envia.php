<?php

// 1) pegar os dados obtidos pelo formulário e guardar em variáveis

$conecta=new PDO ("mysql:host=localhost;dbname=banco;","root","");
$nome 	 = $_POST['nome'];
$email 	 = trim($_POST['email']);
$senha1  = $_POST['senha1'];

$sql='insert into cadastro (id,nome,email,senha) values (null,"'.$nome.'","'.$email.'","'.$senha1.'")';

$insere = $conecta->prepare($sql);

$insere->execute();


echo("Cadastro efetuado!");

?>