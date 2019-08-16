select * from usuario;

select * from venda;

drop table venda;

insert into usuario (nomeusuario,email,senha) VALUES ('a','a',MD5('a'));


CREATE TABLE  Venda 
(	codProduto serial, 
	nomeItem VARCHAR(200) NOT NULL,
 	quantidade VARCHAR(200) NOT NULL,
	peso VARCHAR(100) NOT NULL,
	dataValidade date NOT NULL, 
	descricao VARCHAR(300), 
	embalagem VARCHAR(100),
 	cidade VARCHAR(100) NOT NULL, 
 	bairro VARCHAR(100) NOT NULL, 
 	rua VARCHAR(100) NOT NULL, 
 	complemento VARCHAR(300), 
 	preco numeric(9,2) NOT NULL,
	codvendedor int NOT NULL, 
	CONSTRAINT "vendaPK" PRIMARY KEY (codProduto),
	CONSTRAINT "usuarioFK" FOREIGN KEY (codvendedor)
        REFERENCES "usuario" 
        ON DELETE SET NULL
        ON UPDATE SET NULL 
) ;



CREATE TABLE  Usuario (	
	codUsuario serial,
	nomeUsuario VARCHAR(300) NOT NULL,
	email VARCHAR(300) NOT NULL,
	senha VARCHAR(40) NOT NULL,
	CONSTRAINT "usuarioPK" PRIMARY KEY (codUsuario)
) ;
