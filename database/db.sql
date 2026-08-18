CREATE DATABASE cadastro_pratos;
USE cadastro_pratos;

CREATE TABLE cardapio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    preco DECIMAL(5, 2) NOT NULL,
    descricao VARCHAR (250) NOT NULL,
    categoria VARCHAR(250 ) NOT NULL
);