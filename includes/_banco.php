<?php
// dados de conexao com banco de dados
$hostname = "localhost";
$bancodedados = "meusite";
$usuario = "root";
$senha = "";

// cria a conexao com banco de dados
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

// Check connection
if (!$conn) {
    die("Erro ao conectar no banco: " . mysqli_connect_error());
}
?>