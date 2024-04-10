<?php
session_start();
if(empty($_SESSION['id'])){

	$_SESSION['msg'] = "<font color:'#fff'>Área restrita</font>";
	header("Location: ../index.php");	
}
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<Title>Cadastro</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css"/>
</head>
<body>
<center>
<h3>Listagem Animais</h3>
<p></p>
<p></p>
<?php 
include "conexao.php";
$query = mysqli_query($sql,"SELECT * FROM animal");
?>
<table border="1">
<tr>
<td align="center">Código</td>
<td align="center">Nome</td>
<td align="center">Raça</td>
<td align="center">Idade</td>
<td align="center">Porte</td>
<td align="center">Propietário</td>
<td align="center" colspan="2">Ação</td>
</tr>
<?php 
while($row = mysqli_fetch_array($query)){
	$codigo = $row['codigo'];
	$nome = $row['nome'];
	$raca = $row['raca'];
	$idade = $row['idade'];
	$porte = $row['porte'];
	$nomep = $row['nomep'];
	echo"
	<tr>
	<td>$codigo</td>
	<td>$nome</td>
	<td>$raca</td>
	<td>$idade</td>
	<td>$porte</td>
	<td>$nomep</td>
	<td><a href=\"editar.php?codigo=$codigo\">[Editar]</a></td>
	<td><a href=\"excluir.php?codigo=$codigo\">[Excluir]</a></td>
	</tr>";	
}
?>


</table>






</body>
</html>