<?php

    require "inc/cabecalho.php";
    require "inc/funcoes-produtos.php";
    $allProdutos = lerProdutosDeumFabricantes($conexao, $fabricanteID);
    

?>

<section id="prateleiras">

        <article class="container-prod limitador">
    <?php foreach ($allProdutos as $allProduto) { ?>

            <article class="itens">
                <a href="" id="itens">
                    <img src="imagens/<?=$allProduto['urlimagem']?>" alt="">
                    <p><?=$allProduto['nome_produto']?></p>
                    <p><?=$allProduto['preco_produto']?></p>
                    <a id="addcart" href="carrinho.php">Adicionar ao Carrinho</a>
                </a>
            </article>
<?php } ?>        
        </article>
    </section>


<?php require "inc/rodape.php"; ?>