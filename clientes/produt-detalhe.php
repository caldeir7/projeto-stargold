<?php
require "cabecalho.php";
require "../inc/funcoes-produtos.php";
$idProduto = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$produtoDetails = lerDetalhes($conexao, $idProduto);

// echo "<pre>";
// var_dump($produtoDetails);
// echo "</pre>";

?>
<div class="container-detalhes">
	<!-- INÍCIO ROW -->

	<article class="art-detalhes">
		<div>
			<img src="imagens/<?=$produtoDetails['urlimagem']?>" alt="Imagem de destaque do post" class="">
		</div>

		
		<h2><?=$produtoDetails['produto']?></h2>
				<p class="">
					<?=$produtoDetails['preco_produto']?>
				</p>
		<p class="textoos"> 
			 <?=$produtoDetails['descricao']?> 
		</p>
	</article>

</div> <!-- FIM ROW -->

<?php
require "../inc/rodape.php";
?>