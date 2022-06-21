<?php
// require "inc/funcoes-posts.php";
require "inc/cabecalho.php";
// $termo = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
// $resultado = buscaProduto($conexao, $termo);
?>

<div class="">
  <h2 class="">
    Você procurou por <span class=""><?=$termo?></span>
    e obteve <span class=""><?=count($resultado)?> resultados</span>
  </h2>

  <!-- INÍCIO Card -->
<?php foreach($resultado as $post){ ?>
  <div class="">
    <article class="">
      <div class="">
        <h3 class=""><?=$post['titulo']?></h3>
        <p class="">
          <time>
            <?=formataData($post['data'])?>
          </time> -
          <?=$post['resumo']?>
        </p>
        <a href="post-detalhe.php?id=<?=$post['id']?>" class="card-link">Continuar lendo</a>
      </div>
    </article>
  </div>
<?php } ?>
  <!-- FIM Card -->

</div>

<?php
require "inc/rodape.php";
?>