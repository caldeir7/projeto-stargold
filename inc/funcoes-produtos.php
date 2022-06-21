<?php
require "conecta.php";

/* Usada em produt-insere.php */
function inserirProduto(mysqli $conexao, string $nome, int $preco, int $quantidade, string $descricao ,$imagem, int $fabricanteID){
    $sql = "INSERT INTO produtos(produtos.nome_produto, produtos.preco_produto, produtos.quantidade, produtos.descricao, produtos.urlimagem, fabricante_id) VALUES('$nome', '$preco', '$quantidade', '$descricao','$imagem', '$fabricanteID')";
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim inserirPost


//Usada em index.php
function lerProdutoLimit(mysqli $conexao):array {
    // Se o tipo de usuario for admin
        $sql = "SELECT ";
        
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produtosLimit = [];
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtosLimit, $produto);
    }
    return $produtosLimit;
}

//Fim função produto limt


/* Usada em produto.php */
function lerProduto(mysqli $conexao):array {
    // Se o tipo de usuario for admin
        $sql = "";
        
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produtos = [];
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
} // fim lerPosts


/* Usada em post-atualiza.php */
function lerUmProduto( $conexao) {    
    $sql = "";

	$query = mysqli_query($conexao, $sql);
    return $query;
} // fim lerUmPost



/* Usada em post-atualiza.php */
function atualizarPost(mysqli $conexao, int $idPost, int $idUsuarioLogado, string $tipodeUsuariologado, string $titulo, string $texto, string $resumo, string $imagem){
    if($tipodeUsuariologado == 'admin'){
        $sql = "UPDATE posts SET titulo = '$titulo', texto = '$texto', resumo = '$resumo', imagem = '$imagem' WHERE id = $idPost ";
    } else{
        $sql = "UPDATE posts SET titulo = '$titulo', texto = '$texto', resumo = '$resumo', imagem = '$imagem' WHERE id = $idPost AND usuario_id = $idUsuarioLogado";
    }
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));       
} // fim atualizarPost



/* Usada em post-exclui.php */
function excluirPost(mysqli $conexao, $idPost, $IDusuarioLogado, $tipodeUsuariologado){    
    if($tipodeUsuariologado == 'admin'){
        $sql = "DELETE FROM posts WHERE id = $idPost";
    }else{
        $sql = "DELETE FROM POSTS WHERE id = $idPost AND usuario_id = $IDusuarioLogado";
    }

	mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim excluirPost



/* Funções utilitárias */

/* Usada em post-insere.php e post-atualiza.php */
function upload($arquivo){
    // Definindo os tipos de imagem aceitos
    $tiposValidos = ["image/png","image/jpg","image/jpeg","image/gif","image/svg+xml"];
    //Verificar se o arquivo enviado nao [e um dos aceitos]
    if ( !in_array($arquivo['type'], $tiposValidos) ) {
        die( " <script> alert('Formato invalido.'); history.back(); </script> " );
    }

    //Acessando o nome do arquivo
    $nome = $arquivo['name']; // $__FILES['arquivo']['name'];

    //Acessando ddos de acesso temporário ao arquivo
    $temporario = $arquivo['tmp_name'];
    //Pasta de destino do arquivo que está sendo enviado
    $destino = "../imagens/$nome";
    //Se o processo de envio temporario para destino for feito com sucesso, então a funçãp retorna verdadeira(indicando o sucesso do processo)
    if( move_uploaded_file($temporario, $destino) ){
        return true;
    }
} // fim upload



/* Usada em posts.php e páginas da área pública */
function formataData(string $data):string{ 
    //Pegamos a data informada, transformamos em texto(strtotime) e depois aplicamos o formato brasileiro (dia/mês/ANO)
    return date("d/m/y H:1", strtotime($data));
} // fim formataData



/*** Funções para a área PÚBLICA do site ***/

/* Usada em index.php */
function lerTodosOsProdutos(mysqli $conexao):array {
    $sql = "";
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produtos = [];
    while( $produto = mysqli_fetch_assoc($resultado) ){
        array_push($produtos, $produto);
    }
    return $produtos; 
} // fim lerTodosOsPosts



/* Usada em post-detalhe.php */
function lerDetalhes(mysqli $conexao, $idPost):array {    
    $sql = "SELECT  posts.data, posts.titulo,posts.texto, posts.resumo, posts.imagem, usuarios.nome AS autor from posts INNER JOIN usuarios ON posts.usuario_id = usuarios.id WHERE posts.id = $idPost ";

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado); 
} // fim lerDetalhes



/* Usada em search.php */
function buscaProduto(mysqli $conexao, string $termo):array {
    $sql = "SELECT  id, data, titulo, resumo FROM posts WHERE titulo LIKE '%$termo%' OR resumo LIKE '%$termo%'  OR texto LIKE  '%$termo%' ORDER BY data DESC";
        
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $posts = [];
    while( $post = mysqli_fetch_assoc($resultado) ){
        array_push($posts, $post);
    }
    return $posts; 
} // fim busca