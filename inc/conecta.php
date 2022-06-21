<?php
$servidor = "localhost"; 
$usuario = "root";	
$senha = ""; 
$banco = "stargold_banco"; 

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

// Após o teste de conexão, apague ou comente as linhas abaixo:
// if($conexao){
//     echo "Tudo ok!";
// }