<?php 
include "conexao.php";

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$porte = $_POST["porte"];
$nomep = $_POST["prop"];

$sql ->query("update animal set nome='$nome', raca='$raca',idade='$idade', porte='$porte', nomep='$nomep' where codigo = $codigo");

header("Location: listar.php");

?>