<?php
require "conecta.php";

// Função inserirUsuario: usada em usuario-insere.php
function inserirUsuario(mysqli $conexao, string $nome,  string $email, string $senha){
    $sql = "INSERT INTO usuario_admin(nome,email,senha) 
        VALUES('$nome', '$email','$senha')";
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// fim inserirUsuario


//função inserirCliente usada em Cadastro.php
function inserirCliente(mysqli $conexao, $nome, $email, $cpf, $data, $nascimento, $endereco,$cep, $cidade, $telefone, $senha, $sexo){
    $sql ="INSERT INTO clientes(cliente_nome,cliente_email,cliente_cpf,cliente_nascimento,cliente_endereco,cliente_cidade,cliente_cep,cliente_telefone,senha,cliente_sexo) VALUES('$nome','$email', '$cpf', '$nascimento', '$endereco', '$cidade', '$cep', '$telefone', '$senha', '$sexo');";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

//
//

//


// Função codificaSenha: usada em usuario-insere.php e usuario-atualiza.php :string ira devolver uma string CRIPTROGAFADA
function codificaSenha(string $senha):string{
    return password_hash($senha, PASSWORD_DEFAULT);
}

// fim codificaSenha



// Função lerUsuarios: usada em usuarios.php
function lerUsuarios(mysqli $conexao):array{
        $sql = "SELECT id, nome, email, senha FROM usuario_admin";

        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        $usuarios = [];

        while($usuario = mysqli_fetch_assoc($query)){
            array_push($usuarios, $usuario);

        }

        return $usuarios;
    }
// fim lerUsuarios



// Função excluirUsuario: usada em usuario-exclui.php
function excluirUsuario(mysqli $conexao, int $id){
        $sql= "";
        //Chamando a função que ira retorna os dados de um fabricante
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
}

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
// fim excluirUsuario



// Função lerUmUsuario: usada em usuario-atualiza.php
function lerUmUsuario(mysqli $conexao, int $id):array{
    $sql = "";
    
    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($query);
}

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
// fim lerUmUsuario



// Função verificaSenha: usada em usuario-atualiza.php
function verificaSenha(string $senhaFormulario, string $senhaBanco):string{
    // Usamos password_verify para verificar se a senha digitada no formulario é igual a que esta no banco de dados se for, retornamos a senha que já existe ou seja não faz nada.
    
    if (password_verify($senhaFormulario, $senhaBanco)){
        return $senhaBanco; // Mantemos como esta(a senha já existe)
    } else{

        //Se nao usamos a função codificaSenha para codificar a senha que recebemos do furmilario.
        return codificaSenha($senhaFormulario);
    }
}

   
// fim verificaSenha



// Função atualizarUsuario: usada em usuario-atualiza.php
function atualizarUsuario(mysqli $conexao, int $id, string $nome, string $email, string $senha, string $tipo){
    $sql= "";

   mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


// fim atualizarUsuario



// Função buscarUsuario: usada em login.php
function buscarUsuarioAdmin(mysqli $conexao, string $email){
    $sql = "SELECT id, nome, email, senha FROM usuario_admin WHERE email = '$email' ";

    $query = mysqli_query($conexao, $sql);

    return mysqli_fetch_assoc($query);
    /* $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($query); */
}
// fim buscarUsuario

//Função Busca login.php
function buscaCliente(mysqli $conexao, string $email){
    $sql ="SELECT id, cliente_nome,cliente_email, senha FROM clientes WHERE cliente_email = '$email'";

    $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    return mysqli_fetch_assoc($query);
    
}
//Fim Função Busca Cliente



