<?php
require "inc/funcoes-sessao.php";
require "inc/cabecalho.php";

require "inc/funcoes-usuarios.php";

// 1) Verifica se o botao entrar for acionado 

if(isset($_POST['entrar'])){

  //2) [IF/ELSE]  somente se o botao for acionando começa o 2 if else verificando se os campos esntão vazios se estiver ele volta pro login php e cria uma parametro de url dizendo campos obrigatórios 

  if( empty($_POST['email']) || empty($_POST['senha']) ){
    //Redireciona para o login com o parametro indicando campos obrigatórios se for verdade

    header("location:login.php?campos_obrigatorios");
  }else{
    //Caso contrário pegue o email e senha digitadas
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    // Verificar no banco se existe alguém com o email informado 
    $usuario = buscaCliente($conexao, $email);

    //3) [ IF/ELSE ] Se for Diferente de Nulo é pq tem usuário
    
    if($usuario != null){
      //4) [IF/ELSE] Se as senhas forem iguais a do banco de dados
      if(password_verify($senha, $usuario['senha'])){
        //4) Então inicia o login para área administrativa
        loginCliente($usuario['id'], $usuario['cliente_nome'], $usuario['email']);
        header("location:clientes/index.php");
      } else {
        //4) Se a senha estiver errada redireciona para login e cria um parametro indicando  que a sneha esta incorreta
        header("location:login.php?senha_incorreta");
      }
    }else{
      //3) se o email e a senha nao exixtirem cria um parametro de url indicando que o usuario nao existe
      header("location:login.php?nao_encontrado");
    }
  }
}

?>

<div id="formu-cont-login">
  <form action="" method="post" id="login" name="">

    <div class="container-cad">
        
      <div class="campos-cad">
        <label for="email">E-mail:</label>
        <input class="" type="email" id="email" name="email"  placeholder="Digite seu Email">
      </div>
      <div class="campos-cad">
        <label for="senha">Senha:</label>
        <input class="" type="password" id="senha" name="senha" placeholder="Digite sua senha">
      </div>
      <p><a href="cadastro.php">Não Tem conta? Cadastre-se Agora</a></p>
      <button class="cadastro-buto" name="entrar" type="submit">Efetuar Cadastro</button>
    </div>
  </form>
</div>


<?php
require "inc/rodape.php";
?>