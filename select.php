
<?php
//Conexão com o banco
require_once 'connect.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>EMAIL</th>
			<th>IDADE</th>
		</tr>
		<?php
			//Cria a string SQL para selecionar os dados
			$sql = "SELECT * FROM Pessoa";

			//Coleta o resultado que é as tuplas da tabela pessoa
			$pessoas = mysqli_query($connect, $sql);

			//Exibi os dados
			while($pessoa = $pessoas){ 
			?>
				<tr>
					<td><?= $pessoa['id'] ?></td>
					<td><?= $pessoa['nome'] ?></td>
					<td><?= $pessoa['email'] ?></td>
					<td><?= $pessoa['idade'] ?></td>
				</tr>
			<?php 
			} 
		?>
	</table>
</body>
</html>


