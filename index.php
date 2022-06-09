<?php
require "inc/cabecalho.php";
require "inc/funcoes-posts.php";
$posts = lerTodosOsPosts($conexao);
// echo "<pre>";
// var_dump($allPosts);
// echo "</pre>";
?>



<div class="row my-1 mx-md-n1">
  <!-- INÍCIO ROW -->

  <!-- INÍCIO Card -->

  <div class="col-md-6 my-1 px-md-1">
    <article class="card shadow-sm h-100">

      <a href="post-detalhe.php?" class="card-link">
        <img class="card-img-top" src="" alt="Imagem de destaque do post">
        <div class="card-body">
          <h5 class="card-title">Nome Produto:</h5>
          <p class="card-text">Preço:</p>
        </div>
      </a>
    
     
    </article>
  </div> 

  <!-- FIM Card -->


</div> <!-- FIM ROW -->

<?php require "inc/rodape.php"; ?>