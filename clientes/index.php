<?php
require "../inc/funcoes-sessao.php";
require "cabecalho.php";
require "../inc/funcoes-produtos.php";
$allProdutos = lerProdutoLimit($conexao);


    // Destruindo variaveis de sessao ao sair
   
// echo "<pre>";
// var_dump($allPosts);
// echo "</pre>";
?>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="../imagens/banner-pc-bem-vindo.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="../imagens/banner-pc-aliancas.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../imagens/banner-pc-relogios.png" class="d-block w-100" alt="...">
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
            <img src="../imagens/icones/entrega-rapida.png" alt="">
            <p>ENVIAMOS para todo o brasil!</p>
        </aside>
        <aside>
            <img src="../imagens/icones/seguro.png" alt="">
            <p>100% SEGURO Certificado SSL</p>
        </aside>
        <aside>
            <img src="../imagens/icones/cartao-do-banco.png" alt="">
            <p>Até 12X SEM Juros 10% Off no boleto</p>
        </aside>
    </section>


    <h2 class="logo-vitrine">Destaques do Mês</h2>     
      
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

<?php require "rodape.php"; ?>