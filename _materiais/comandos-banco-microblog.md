# Comandos para criação do banco de dados do Microblog

## 1) Criar banco de dados (ajuste para conter seu nome)
CREATE DATABASE progweb_microblog_guilhermes CHARACTER SET "utf8mb4";

## 2) Criar tabela de usuários
CREATE TABLE clientes(
	id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cliente_nome VARCHAR(45) NOT NULL,
    cliente_endereco VARCHAR(100) NOT NULL,
    cliente_cidade VARCHAR(45) NOT NULL,
    cliente_cep VARCHAR(45) NOT NULL,
    cliente_telefone VARCHAR(14) NOT NULL,
    cliente_email VARCHAR(40) NOT NULL UNIQUE,
    cliente_cpf VARCHAR(15) NOT NULL UNIQUE,
  	senha VARCHAR(255) NOT NULL,
	cliente_sexo ENUM('masculino','feminino') NOT NULL,
    cliente_nascimento VARCHAR(45) NOT NULL,
    pedidos_idpedido INT NOT NULL
)

## 3) Criar tabela de pedidos
CREATE TABLE pedidos(
	id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, -- pega a data atual no momento
	clientes_id INT NOT NULL,
	produtos_id INT NOT NULL,
);

## 4) Criar chave estrangeira para relacionamento entre as tabelas
ALTER TABLE posts 
  ADD CONSTRAINT fk_posts_usuarios 
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id); 