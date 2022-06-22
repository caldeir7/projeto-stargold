<?php  
    require "../inc/cabecalho.php";
    require "../inc/funcoes-produtos.php";
    require "../inc/funcoes-sessao.php";
    

$allProdutos = lerTodosOsProdutos($conexao);





?>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                

                    <!-- <source srcset="../imagens/banner-mobile-bem-vindo.png" media="(max-width: 600px)"> -->
                    <img src="../imagens/banner-pc-bem-vindo.png" alt="MDN">
                    
                
            </div>
            <div class="carousel-item" data-interval="2000">

                <!-- <picture> -->
                <!-- <source srcset="../imagens/banner-mobile-aliancas.png" media="(max-width: 600px)"> -->
                    <img src="../imagens/banner-pc-aliancas.png" class="d-block w-100" alt="...">
                <!-- </picture> -->
            </div>
            <div class="carousel-item">
                <picture>
                    <source srcset="../imagens/banner-mobile-relogios.png" media="(max-width: 600px)">
                    <img src="../imagens/banner-pc-relogios.png" class="d-block w-100" alt="...">
                </picture>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </button>
    </div>

    <h2 class="text-center" id="title-produtos">Produtos</h2>

    <section id="prateleiras">

        <aside class="filtros">
            <p>Colares</p>
            <p>Aneis</p>
            <p>Relogios</p>
        </aside>
        <article class="container-prod limitador">
    <?php foreach ($allProdutos as $allProduto) { ?>

            <article class="itens">
                <a href="produt-detalhe.php?id=<?=$allProduto['id']?>" id="itens">
                    <img src="imagens/<?=$allProduto['urlimagem']?>" alt="">
                    <p><?=$allProduto['nome_produto']?></p>
                    <p><?=$allProduto['preco_produto']?></p>
                    <a id="addcart" href="carrinho.php?addcart=<?=$allProduto['id']?>">Adicionar ao Carrinho</a>
                </a>
            </article>
<?php } ?>        
        </article>
    </section>
<?php
    require "inc/rodape.php";
?>