<?php
require "inc/cabecalho.php";
require "inc/funcoes-produtos.php";
$allProdutos = lerTodosOsProdutos($conexao);
// echo "<pre>";
// var_dump($allPosts);
// echo "</pre>";
?>



<div class="row my-1 mx-md-n1">
  <!-- INÍCIO ROW -->

  <!-- INÍCIO Card -->
<?php foreach ($allProdutos as $allProduto) { ?>
  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">

      <a href="post-detalhe.php?" class="card-link">
        <img class="card-img-top" src="imagens/<?=$allProduto['imagem']?>" alt="Imagem de destaque do post">
        <div class="card-body">
          <h5 class="card-title"><?=$allProduto['nome_produto']?></h5>
          <p class="card-text"><?=$allProduto['preco_produto']?></p>
        </div>
      </a>
    
     
    </article>
  </div> 
<?php } ?>
  <!-- FIM Card -->


</div> <!-- FIM ROW -->

<?php require "inc/rodape.php"; ?>