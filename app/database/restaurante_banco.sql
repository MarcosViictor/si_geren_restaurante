create table if not exists cliente(
	id int auto_increment not null,
    nome varchar(30) not null,
    endereco varchar(30) not null,
    contato int,
    primary key (id)
) default charset = utf8;

create table if not exists funcionario(
	id int auto_increment not null,
    nome varchar(30) not null,
    cargo varchar(10) not null,
    primary key(id)
)default charset = utf8;

create table if not exists marmita(
	id int auto_increment not null,
	nome varchar(15),
    preco decimal(4,2),
    descricao varchar(100),
    primary key(id)
)default charset = utf8;

create table if not exists pagamento(
	id int auto_increment not null,
    pix decimal (4,2),
    debito decimal (4,2), 
    credito decimal (4,2),
    primary key(id)
)default charset = utf8;

ALTER TABLE funcionario
ADD COLUMN senha int AFTER email;
ALTER TABLE cliente
MODIFY senha VARCHAR(255);

INSERT INTO cliente (nome, email, senha, endereco, contato) 
VALUES ('Teste', 'teste@example.com', '123.', 'Endereço de Teste', 123456789);


select * from marmita;

select * from cliente;
