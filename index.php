<?php
require "inc/cabecalho.php";
require "inc/funcoes-produtos.php";
require "inc/funcoes-fabricantes.php";

$lerUmFabri = lerUmFabricante($conexao);

$allProdutos = lerProdutoLimit($conexao);
// echo "<pre>";
// var_dump($allPosts);
// echo "</pre>";


?>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <picture>
                    <source srcset="imagens/banner-mobile-bem-vindo.png" media="(max-width: 700px)">
                    <img src="imagens/banner-pc-bem-vindo.png" class="d-block w-100" alt="...">
                </picture>
            </div>
            <div class="carousel-item" data-interval="2000">

                <picture>
                    <source srcset="imagens/banner-mobile-aliancas.png" media="(max-width: 700px)">
                    <img src="imagens/banner-pc-aliancas.png" class="d-block w-100" alt="...">
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source srcset="imagens/banner-mobile-relogios.png" media="(max-width: 700px)">
                    <img src="imagens/banner-pc-relogios.png" class="d-block w-100" alt="...">
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

    <h3>Vantagens de comprar na StarGold</h3>
    <section id="entrega-rapidas">
        <aside>
            <img src="imagens/icones/entrega-rapida.png" alt="">
            <p>ENVIAMOS para todo o brasil!</p>
        </aside>
        <aside>
            <img src="imagens/icones/seguro.png" alt="">
            <p>100% SEGURO Certificado SSL</p>
        </aside>
        <aside>
            <img src="imagens/icones/cartao-do-banco.png" alt="">
            <p>Até 12X SEM Juros 10% Off no boleto</p>
        </aside>
    </section>


    <h2 class="logo-vitrine">Destaques do Mês</h2>     
      
    <article class="container-prod limitador">
<?php foreach ($allProdutos as $allProduto) { ?>

        <article class="itens">
            <a href="" id="itens">
              <img src="imagens/<?=$allProduto['urlimagem']?>" alt="">
              <p><?=$allProduto['nome_produto']?></p>
              <p><?=$allProduto['preco_produto']?></p>
              <a id="addcart" href="">Adicionar ao Carrinho</a>
            </a>
        </article>
<?php } ?>        
      </article>


    <section id="wapper-info">
        <article id="container-chamativo">
            <aside id="chamativos">
                <div>
                    <a href="categorias.php"><img src="imagens/banner-categoria-aliancas.png" alt=""></a>
                </div>
                <p>Alianças Exlusivas que você só encontra aqui! Presenteie quem você ama com as Alianças da <strong>StarGold.</strong></p>
            </aside>
            <aside id="chamativos-2">
                <div>
                    <img src="imagens/banner-categoria-mobile-relogios.png" alt="">
                </div>
                <p>Alianças Exlusivas que você só encontra aqui! Presenteie quem você ama com as Alianças da <strong>StarGold.</strong></p>
            </aside>
            <aside id="chamativos">
                <div>
                    <img src="imagens/banner-categoria-colares.png" alt="">
                </div>
                <p>Alianças Exlusivas que você só encontra aqui! Presenteie quem você ama com as Alianças da <strong>StarGold.</strong></p>
            </aside>
            
            
        </article>
    </section>
      
        
        

  <!-- FIM Card -->
    <section id="depoimentos">
        <h2>Comentarios</h2>
        <div class="container">
            <div class="card">
                <div class="icon-user">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <div class="conteudo">
                    <div class="iconss"><i class="fa fa-quote-left"></i></div>
                    <div class="iconss"><i class="fa fa-quote-right"></i></div>
            
                    <div class="info">
                        <p>​ </p>
                    </div>
                </div>
                <div class="name">
                    <div class="texto">
                        <h3>Diana Santos</h3>
                    </div>
                </div>
            
            </div>
            <div class="card">
                <div class="icon-user">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <div class="conteudo">
                    <div class="iconss"><i class="fa fa-quote-left"></i></div>
                    <div class="iconss"><i class="fa fa-quote-right"></i></div>
            
                    <div class="info">
                        <p>
                           
                        </p>
                    </div>
                </div>
                <div class="name">
                    <div class="texto">
                        <h3>Israel Rodrigues</h3>
                    </div>
                </div>
            
            </div>
            <div class="card">
                <div class="icon-user">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <div class="conteudo">
                    <div class="iconss"><i class="fa fa-quote-left"></i></div>
                    <div class="iconss"><i class="fa fa-quote-right"></i></div>
            
                    <div class="info">
                        <p></p>
                    </div>
                </div>
                <div class="name">
                    <div class="texto">
                        <h3>Flavia Sales</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php require "inc/rodape.php"; ?>