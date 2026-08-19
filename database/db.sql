CREATE DATABASE pratos_restaurante;
USE pratos_restaurante;

    CREATE TABLE usuario (
    usuario_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_nome VARCHAR(250) NOT NULL, 
    usuario_email VARCHAR(250) NOT NULL UNIQUE,
    usuario_senha VARCHAR(250) NOT NULL
    );

CREATE TABLE cardapio (
    cardapio_id INT AUTO_INCREMENT PRIMARY KEY,
    cardapio_nome VARCHAR(250) NOT NULL,
    cardapio_preco DECIMAL(5, 2) NOT NULL,
    cardapio_descricao VARCHAR (250) NOT NULL,
    cardapio_categoria VARCHAR(250 ) NOT NULL
);