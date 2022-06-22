<?php
    require "../inc/cabecalho.php"; 
    $carrinho = filter_input(INPUT_GET, "addcart", FILTER_SANITIZE_NUMBER_INT);
?>

    <div class="carrinho-cont">
        <article class="carrinho-produto">
                <div class="img-carrin">
                    <img src="imagens/02-colar-tiffany-duas-voltas-capa.jpg" alt="">
                </div>
                <p></p>
                <p>Preco:</p>
                <p>Quantidade</p>
                <a href=""><i class="fa fa-trash-o"></i></a>
        
        </article>
    
    </div>

    <a href="">Finalizar Compra</a>



<?php
    require "../inc/rodape.php";
 
?>