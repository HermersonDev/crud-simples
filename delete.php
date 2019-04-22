<?php
//Conexão com o banco
require_once 'connect.php';

//Verifica se existe o parâmetro delete no array global post
if(isset($_POST['delete'])){

	//coleta o id passado via post
	$id = mysqli_escape_string($connect, $_POST['id']);

	//Cria a string SQL para excluir os dados de um determinado id
	$sql = "DELETE FROM Pessoa WHERE id = '$id'";

	//Executa a string SQL no banco de dados e verifica se a opção foi realizada
	if(mysqli_query($connect, $sql)){
		echo "Dados excluídos com sucesso !";
	}else{
		echo "Não foi possivel escluir os dados !";
	}
}