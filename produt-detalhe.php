<?php
// require "inc/cabecalho.php";
// $idProduto = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

// $produtoDetails = lerDetalhes($conexao, $idPost);

?>
<div class="row">
	<!-- INÍCIO ROW -->

	<article class="col-12 bg-white rounded shadow my-1 py-4">
		<h2>Nome</h2>
		<p class="font-weight-light">
			<time>
				data
			</time> - <span></span>
		</p>

		<img src="" alt="Imagem de destaque do post" class="float-left pr-2 img-fluid">

		<p class="textoos"> 
			 nl2br descrição 
		</p>
	</article>

</div> <!-- FIM ROW -->

<?php
require "inc/rodape.php";
?>