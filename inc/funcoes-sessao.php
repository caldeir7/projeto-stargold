<?php
/* Aqui programaremos futuramente
os recursos de login/logout e verificação
de permissão de acesso dos usuários */

/* Verificando se nao existe uma sessão em funcionamento */

//Sessões precisam ser iniciadas explicitamente

if(!isset($_SESSION)){
    session_start();
}


function verificaAcesso(){
    /* Se não existe uma variavel de sessão relacionada ao id do usuario logado.... */
    if(!isset($_SESSION['id'])){
        /* Então significa que eles não esta logado, portanto apague qualquer resquicio de sessão e force o usuario a ir para o login.php */
        session_destroy();
        header("location:../login.php");
        die();
    }
}


//Entrada login.php
function loginAdmin(int $id, string $nome, string $email){
    //Criando Variaveis de sessão ao logar
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

}


function loginCliente(int $id, string $nome, string $email){

    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
}

//Saidas nas páginas administrativas quando clicamos em sair
function logout(){
    // Destruindo variaveis de sessao ao sair
    session_start();
    session_destroy();
    header("location:../index.php?logout");
    die();
}


//função verificaAcessoAdmin
function verificaAcessoAdmin(){
    if($_SESSION['email'] != 'goldamin@yahoo.com'){
        //redireciona para a página não autorizada
        header("location:nao-autorizado.php");
        die();
    }
}

