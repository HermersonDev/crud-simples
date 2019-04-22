<?php

//Conexão com o banco
require_once 'connect.php'; 

//Verifica se existe o parâmetro create no array global post
if(isset($_POST['create'])){
	
	/*
		Tabela Pessoa(id, nome, email, idade)
	*/

	//Coleta os dados passos via post e faz a validação
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade'];

	//Cria a string SQL para inserir os dados
	$sql = "INSERT INTO Pessoa (nome, email, idade) VALUES ('$nome', '$email', '$idade')";

	//Executa a string SQL no banco de dados e verifica se a opção foi realizada
	if(mysqli_query($connect, $sql)){
		echo "Dados cadastrados com sucesso !";
	}else{
		echo "Não foi possivel cadastrar os dados !";
	}

}