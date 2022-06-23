<?php
require "conecta.php";

function lerFabricantes(mysqli $conexao){
    $sql ="SELECT id, nome FROM fabricantes";

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $fabricantes = [];

    while($fabricante = mysqli_fetch_assoc($query)){
        array_push($fabricantes, $fabricante);
    }
    return  $fabricantes;
}

function lerUmFabricante($conexao){

    $sql = "SELECT id, nome FROM fabricantes WHERE id ";

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    $fabricantes = [];

    while($fabricante = mysqli_fetch_assoc($query)){
        array_push($fabricantes, $fabricante);
    }
    return  $fabricantes;
}



function lerProdutosDeumFabricantes(mysqli $conexao, $fabricanteID){
    $sql = "SELECT id, nome_produto, preco_produto, descricao, urlimagem FROM produtos WHERE fabricantes_id =$fabricanteID";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produtos = [];
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

?>