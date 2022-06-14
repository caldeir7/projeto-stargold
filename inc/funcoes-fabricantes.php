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

?>