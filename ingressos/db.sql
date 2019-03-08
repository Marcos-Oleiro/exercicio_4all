create table usuario (id serial primary key, username varchar(100) not null, login varchar(100) not null,senha varchar(50) not null, email varchar(50) not null );

create table leilao (id serial primary key, id_usuario int not null references usuario(id), produto varchar(150), foto text not null, valormin money not null, inicio timestamp, fim timestamp );

create table lance (id_usuario int not null references usuario(id), id_leilao int references leilao(id), horario timestamp not null, valor money not null);


insert into usuario (username, login, senha, email) values ('usuario1', 'username1', 'senha1', 'email1@domain.com'), 
                    ('usuario2', 'username2', 'senha2', 'email2@domain.com'),
                    ('usuario3', 'username3', 'senha3', 'email3@domain.com');