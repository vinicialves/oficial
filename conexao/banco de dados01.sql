create database todo;
use todo;

create table integrantes(
	codigo int primary key auto_increment,
    nome varchar(100) not null,
    idade int(2) not null,
    email varchar(100) not null,
    senha int(50) not null);
