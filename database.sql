CREATE TABLE usuario(
	ID int (11) not null,
	nombre varchar(40) null,
	apellido varchar(40) null,
	telefono varchar(10) null,
	email varchar(30) null,
	contraseña varchar(10) null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (ID)
)


CREATE TABLE producto(
	codigo int (11) not null AUTO_INCREMENT,
	ID int (11) not null,
	titulo varchar(50) null,
	descrip varchar(100) null,
	imagen varchar(200) null,
	cantidad decimal(10,0) null,
	fecha timestamp null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codigo),
	CONSTRAINT fk_producto
	FOREIGN KEY (ID) REFERENCES productor (ID)	
)

	
CREATE TABLE tipou(
	ID int (11) not null,
	nombre varchar(40) null,
	CONSTRAINT pk_productor
	PRIMARY KEY (ID)
)