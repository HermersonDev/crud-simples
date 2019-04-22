<?php

//Conexão com o banco do tipo MySQL
$host = "locahost";
$username = "root";
$password = "";
$dbname = "testDB";

$connect = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_error()){
	echo "Erro na conexão: ". mysqli_connect_error();
}