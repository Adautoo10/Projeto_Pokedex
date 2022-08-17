create database pokedex;

use pokedex;

create table pokemon (
	id int auto_increment not null,
    nome varchar(250) not null,
    descricao varchar(250) not null,
    tipo varchar(250) not null,
    primary key(id)
);
    