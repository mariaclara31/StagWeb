<?php
$posicao = $_POST['posicao'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "ponto";

//Cria a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_horario = "INSERT INTO `horario`(`Entrada`, `Almoço`, `Retorno`, `Saída`) VALUES ("$posicao")";
$resultado_horario = mysqli_query($conn, $result_horario);
?>

