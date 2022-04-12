drop database if exists final_web1;

create database final_web1;  

use final_web1;

create table users (
id int AUTO_INCREMENT PRIMARY KEY,
username varchar(255),
pw varchar (255)
);

create table games (
id_games int AUTO_INCREMENT PRIMARY KEY,
game varchar(255)
);

create table perso (
id_perso int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255),
game_id int,
user_id int,
foreign key (game_id) references games(id_games),
foreign key (user_id) references users(id)
);