<?php
require "../inc/cabecalho-admin.php"; 
require "../inc/funcoes-produtos.php";
require "../inc/funcoes-fabricantes.php";
$dadosFabricantes = lerFabricantes($conexao);
// $posts = lerPosts($conexao, $_SESSION['id'], $_SESSION['tipo']);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];

$oneProduto = lerUmProduto($conexao, $idProduto);


if(isset($_POST['atualizar'])){
  $nome = filter_input(INPUT_POST, 'nproduto', FILTER_SANITIZE_SPECIAL_CHARS);
  $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
  $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
  $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
  $fabricanteID = filter_input(INPUT_POST,'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);
  // $imagemExistente = filter_input(INPUT_POST, 'imagem-existente' FILTER_SANITIZE_SPECIAL_CHARS);

  // Se o campo imagem estiver vazio, significa que o usuário nao quer trocar de imagem
  if(empty($_FILES['imagem']['name'])){
    $imagem = $_POST['imagem-existente']; //Manter a imagem Já Existente no banco
  } else {
  /* Caso Contrario, pegue a referência(nome e extensão) e faça o processo de upload para o servidor. */
    $imagem = $_FILES['imagem']['name'];
    upload($_FILES['imagem']);
  }
  // Somente depois do processo de upload(se necessário), chamaremos a função de atualizarPost


  // atualizarUmProduto( $conexao, $idPost, $nome, $preco,$quantidade, $descricao, $imagem, $fabricanteID );
  
  
  header("location:posts.php");
}

?>
       
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Atualizar Produtos</h2>

    <form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar"> 
        
    <div class="form-group">
          <label for="titulo">Nome Produto:</label>
          <input value="<?=$oneProduto['nome_produto']?>" class="form-control" required type="text" id="nproduto" name="nproduto" >
        </div>

        <div class="form-group">
          <select name="fabricante" id="fabricante">
            <option value=""></option>
            <?php foreach($dadosFabricantes as $fabricante){ ?>

              <option value="<?=$fabricante['id']?>"><?=$fabricante['nome']?></option>

            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="titulo">Preco:</label>
          <input class="form-control" required type="number" id="preco" name="preco" min="0" max="1000" step="0.1" >
        </div>
        <div class="form-group">
          <label for="titulo">Quantidade:</label>
          <input class="form-control" required type="number" id="quantidade" name="quantidade" min="0" max="20" step="1" >
        </div>

        <div class="form-group">
          <label for="descricao">Descrição: (máximo de 300 caracteres):</label>
          <span id="maximo" class="badge badge-danger">0</span>
          <textarea class="form-control" required name="descricao" id="descricao" cols="50" rows="3" maxlength="300"></textarea> 
        </div>
      
      <div class="form-group">
        <label for="imagem-existente">Imagem do post:</label>
        <!-- campo somente leitura, meramente informativo -->
        <input value="<?=$produto['imagem']?>" class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly>
      </div>            
          
      <div class="form-group">
        <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
        <input class="form-control" type="file" id="imagem" name="imagem"
        accept="image/png, image/jpeg, image/gif, image/svg+xml">
      </div>
        
        <button class="btn btn-primary" name="atualizar">Atualizar post</button>
    </form>
      
  </article>
</div>

<?php
require "../inc/rodape-admin.php"; 
?>