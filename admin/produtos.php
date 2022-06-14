<?php 
require "../inc/funcoes-produtos.php";
require "../inc/cabecalho-admin.php"; 

$lerProdutos = lerProduto($conexao,$_SESSION['id'], $_SESSION['tipo']);
$quantidade = count($lerProdutos);

?>      
    
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Produtos <span class="badge badge-primary"><?=$quantidade?></span></h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="produt-insere.php">Inserir novo Produto</a>
    </p>
            
    <div class="table-responsive"> 

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>Título</th>
            <th>Imagem</th>
            <th>Fabricante</th>
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>
<?php foreach($lerProdutos as $lerProduto) { ?>
          <tr>
            <td><?=$lerProduto['produto']?></td>
            <td id="imgggs"><?=$lerProduto['imagem']?></td>
            <td> <?=$lerProduto['fabricante']?></td>
            <td class="text-center">
              <a class="btn btn-warning btn-sm" 
              href="produt-atualiza.php?id=<?=$lerProduto['id']?>">
                  Atualizar
              </a>
            </td>
            <td class="text-center">
              <a class="btn btn-danger btn-sm excluir"
              href="produt-exclui.php?id=<?=$lerProduto['id']?>">
                  Excluir
              </a>
            </td>
          </tr>
<?php } ?>
        </tbody>                
      </table>
      
    </div>
  </article>
</div>
     

<?php require "../inc/rodape-admin.php"; ?> 