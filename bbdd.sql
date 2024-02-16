
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

create table if not exists `interprete`(
  id int primary key auto_increment,
  nombre varchar(100),
  imagen varchar(100)
);

create table if not exists `genero`(
  id int primary key auto_increment,
  nombre varchar(100),
  imagen varchar(100)
);

  create table if not exists `cancion`(
    id int primary key auto_increment,
    titulo varchar(100),
    archivo varchar(100),
    imagen varchar(100),
    idgenero int,
    idinterprete int,
    foreign key (idgenero) references genero(id),
    foreign key (idinterprete) references interprete(id)
  );