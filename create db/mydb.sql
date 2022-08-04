create database crud;

use crud;

create table clients(
    id int primary key auto_increment,
    name varchar(255),
    email varchar(100)
);

insert into clients values 
    ('', 'Joel Irineu', 'irineu.joel01@gmail.com'),
    ('', 'João Gabriel', 'gabrieldesolzalima44@gmail.com'),
    ('', 'Matheus Vasconcelos', 'matheus.vasco.roch@gmail.com');

show tables;

select * from clients;