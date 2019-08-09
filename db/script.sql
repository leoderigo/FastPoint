create database cantinadojao;
use cantinadojao;

create table cliente (
	id		integer primary key	auto_increment					not null,
	cpf		char(11)											not null,
	login	varchar(25)											not null,
	nome	varchar(80)											not null,
	senha	varchar(20)											not null,
	cred	decimal(10,2)										default 0,
	idEmp	integer												not null,
);

create table empresa (
	id		integer primary key	auto_increment					not null,
	login	varchar(25)											not null,
	nome	varchar(80)											not null,
	propri	varchar(50)											not null,
	senha	varchar(50)											not null,
	cnpj	char(14)											not null
);

create table conta(
	id		integer primary key	auto_increment					not null,
	idCli	integer 											not null,
	data 	date 												not null,
	valor	decimal(10,2)										not null,
);

create table pedido (
	id		integer primary key	auto_increment					not null,
	obs		varchar(255)												,
	valTot	decimal(10,2)										not null,
	idCli	integer												not null,
	constraint	fk_pedido_cliente foreign key (idCli)	references cliente(id)
);
CREATE UNIQUE INDEX fk_pedido_cliente ON pedido (idCli);

create table produto (
	id		integer primary key	auto_increment					not null,
	descr	varchar(255)										not null,
	prCom	decimal(9,2)										not null,
	prVen	decimal(9,2)										not null,
	tipo	varchar(50)											not null,
	estoque	integer												not null,
	idEmp	integer												not null,
	constraint	fk_produto_empresa	foreign key	(idEmp)	references	empresa(id)
);

create table itemPed (
	id		integer primary key	auto_increment					not null,
	idPed	integer												not null,
	idProd	integer												not null,
	qdtProd	integer												not null,
	constraint	fk_itemPed_ped foreign key (idPed)	references pedido(id),
	constraint	fk_itemPed_produto foreign key (idProd)	references produto(id)
);
CREATE INDEX fk_itemPed_ped ON itemPed (idPed);
CREATE INDEX fk_itemPed_produto ON itemPed (idProd);

insert into cliente
	values(null, '123', 'Leo', '123', null);
		


insert into produto
	values(null, 'Hamburgão', 0, 3.5, 'Salgado', 10, 1), 
		(null, 'Oreo', 0, 1.5,  'Doces', 10, 1),
		(null, '5Star', 0, 2.5, 'Doces', 10, 1),
		(null, 'Halls', 0, 2.0, 'Doces', 10, 1),
		(null, 'Suflair', 0, 3.5, 'Doces', 10, 1),
		(null, 'Laka', 0, 2.0, 'Doces', 10, 1),
		(null, 'Trento', 0, 2.0, 'Doces', 10, 1),
		(null, 'Diamante Negro', 0, 2.0, 'Doces', 10, 1),
		(null, 'Coca-Cola', 0, 3.5, 'Bebida', 10, 1), 
		(null, 'Sprite 2L', 0, 6.5, 'Bebida', 10, 1),
		(null, 'Schweppes 2L', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Suco Del Valle 350ml Lata ', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Coca-Cola 2L', 0, 7.5, 'Bebida', 10, 1),
		(null, 'Jaboti 2L', 0, 4.5, 'Bebida', 10, 1),
		(null, 'Fanta 2L', 0, 6.5, 'Bebida', 10, 1),
		(null, "Suco D'lice", 0, 2.5, 'Bebida', 10, 1),
		(null, 'Bacon Beck+', 0, 1.5, 'Salgado', 10, 1),
		(null, 'Paçoca', 0, 1.5, 'Doces', 10, 1),
		(null, 'Água', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Água com gás', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Suco Garrafa 390ml', 0, 2.0, 'Bebida', 10, 1),
		(null, 'Lanche Natural', 0, 3.5, 'Bebida', 10, 1),
		(null, 'Salgados', 0, 1.0, 'Salgado', 10, 1),
		(null, 'Batata', 0, 2.0, 'Salgado', 10, 1),
		(null, 'Bombom', 0, 1.5, 'Doces', 10, 1),
		(null, 'Amendorato', 0, 1.5,'Doces', 10, 1),
		(null, 'Bolos', 0, 3.5, 'Doces', 10, 1),
		(null, 'Cones', 0, 3.5, 'Doces', 10, 1),
		(null, 'Sorvete', 0, 3.5, 'Doces', 10, 1),
		(null, 'Picolé', 0, 1.0, 'Doces', 10, 1),
		(null, 'Paçoca Moreninha 22g', 0, 0.5, 'Doces', 10, 1),
		(null, 'Bolacha Nikito', 0, 2.0, 'Doces', 10, 1);