<?php 
include "conexao.php";

$nome = $_POST["nome"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$porte = $_POST["porte"];
$nomep = $_POST["prop"];


$sql->query("insert into animal(codigo, nome, raca, idade, porte, nomep)value(null, '$nome','$raca','$idade','$porte','$nomep')");

header("Location: ../html/Cadastro.html");

?>