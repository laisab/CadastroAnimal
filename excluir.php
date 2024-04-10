<?php 
include "conexao.php";

$id =$_GET["codigo"];

mysqli_query($sql, "DELETE FROM animal where codigo = $id");
header("Location: listasr.php");
?>