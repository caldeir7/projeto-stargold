<?php
require "inc/cabecalho.php";
// require "inc/funcoes-produtos.php";
// $allProdutos = lerProdutoLimit($conexao);
// echo "<pre>";
// var_dump($allPosts);
// echo "</pre>";
?>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="imagens/destaque-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="imagens/destaque-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagens/destaque-1.jpg" class="d-block w-100" alt="...">
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
              <img src="imagens/<?=$allProduto['imagem']?>" alt="">
              <p><?=$allProduto['produto']?></p>
              <p><?=$allProduto['preco_produto']?></p>
              <a id="addcart" href="">Adicionar ao Carrinho</a>
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
                        <p>​Perfeito agora! Adorei o atendimento, o respeito e a solução dos problemas com vocês... Esse já é o segundo acordo com vocês, e o atendimento é espetacular!</p>
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
                            Gostaria de parabenizar a todos que fazem parte da equipe “RenovaCred” pelo excelente atendimento  em todas as etapas do processo de parametrização para a limpeza do meu nome. Sou muito grato pelo atendimento,  estou muito feliz com o atendimento desse time maravilhoso de profissionais competentes
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
                        <p>Empresa flexível que atende as necessidades do cliente.   Parabéns pela serviço oferecido e vida longa e próspera para a equipe RenovaCred.</p>
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