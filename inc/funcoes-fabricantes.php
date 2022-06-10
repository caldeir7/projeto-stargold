<?php
require "conecta.php";

function lerFabricantes(mysqli $conexao){
    $sql ="SELECT id, nome FROM fabricantes";

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

?>