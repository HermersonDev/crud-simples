<?php
//Conexão com o banco
require_once 'connect.php';

//Verifica se existe o parâmetro update no array global post
if(isset($_POST['update'])){
	//Recupera os dados via post
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_espace_string($connect, $_POST['idade']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	//Cria a string SQL para alterar os dados
	$sql = "UPDATE Pessoa SET nome = '$nome', email = '$email', idade = '$idade' WHERE id = '$id'";

	//Executa a string SQL no banco de dados e verifica se a opção foi realizada
	if(mysqli_query($connect, $sql)){
		echo "Dados alterados com sucesso !";
	}else{
		echo "Não foi possível alterar os dados !";
	}
}