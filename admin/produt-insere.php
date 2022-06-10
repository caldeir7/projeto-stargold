<?php 
require "../inc/cabecalho-admin.php"; 
require "../inc/funcoes-produtos.php";
require "../inc/funcoes-fabricantes.php";

$dadosFabricantes = lerFabricantes($conexao);

if(isset($_POST['inserir'])){
  $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
  $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
  $resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_SPECIAL_CHARS);
  

  //upload de imagem (blob arquivos binário .pdf .jpg. exe)
  // Obtendo dados do arquivo enviado
  $imagem = $_FILES['imagem'];
  // echo "<pre>" ;
  //   var_dump($imagem);
  // echo "</pre>";
  // die();
  //Função upload (responsavel por enviar o arquivo para o hd do servidor)
  upload($imagem);
  //Função inserirpost(atenção: mandaremos apenas o name da imagem)
  inserirPost($conexao, $titulo, $texto, $resumo, $imagem['name'], $_SESSION['id']);
  header("location:posts.php");
}
?>
       
  <div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
      <h2 class="text-center">Inserir Post</h2>
          <!-- Adicionamos o atributo enctype para habilitar o suporte de envio de arquivos via formulario -->
      <form enctype="multipart/form-data"  class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

        <div class="form-group">
          <label for="titulo">Nome Produto:</label>
          <input class="form-control" required type="text" id="nproduto" name="nproduto" >
        </div>

        <div class="form-group">
          <select name="" id="">
            <option value=""></option>
            <option value="">Tiffany</option>
            <option value="">Swarovisk</option>
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
          <label for="resumo">Descrição: (máximo de 300 caracteres):</label>
          <span id="maximo" class="badge badge-danger">0</span>
          <textarea class="form-control" required name="descricao" id="descricao" cols="50" rows="3" maxlength="300"></textarea> 
        </div>
                
        <div class="form-group">
          <label for="imagem" class="form-label">Selecione uma imagem:</label>
             <!-- Para arqvuio tipo file -->
          <input required class="form-control" type="file" id="imagem" name="imagem"
          accept="image/png, image/jpeg, image/gif, image/svg+xml">
        </div>
                
        <button class="btn btn-primary"  id="inserir" name="inserir">Inserir post</button>                
                
      </form>

    </article>
  </div>

<?php require "../inc/rodape-admin.php"; ?>