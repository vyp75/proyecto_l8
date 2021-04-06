USE proyecto;

CREATE TABLE articulos(
	id_art int (10) AUTO_INCREMENT,
	descripcionarticulo varchar(255) NOT NULL,
	precio float (10,2),
    primary key(id_art),
    id bigint(20) references users
);

CREATE TABLE colores(
	id_color int(10) auto_increment,
	color VARCHAR(50) NOT NULL,
    primary key(id_color)
);

CREATE TABLE tallas(
	id_talla int(10) auto_increment,
	Talla varchar(50) NOT NULL,
	primary key(id_talla)
);

CREATE TABLE articulo_color(
	id_art int(10) references articulos,
    id_color int(10) references colores
);

CREATE TABLE articulo_talla(
	id_art int(10) references articulos,
    id_talla int(10) references tallas
);

CREATE TABLE stock(
	id_stock int(10) auto_increment,
	id_art int(10)references articulos,
    id_color int(10)references colores,
    id_talla int(10)references tallas,
	unidades int(10) not null,
    primary key(id_stock)
);
