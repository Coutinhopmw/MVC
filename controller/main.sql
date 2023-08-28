CREATE SCHEMA `cadastro` ;

create table cad(
id integer not null auto_increment primary key,
nome varchar(45),
email varchar(45),
senha varchar(40),
tag varchar(4)
);

insert into cad (nome, email, senha, tag) values
("LuFi-1227", "luizsalvesp@protonmail.com", "senha123", "adm");

select * from cad;