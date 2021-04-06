USE proyecto;

CREATE TABLE articulos(
	id_art int (10),
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

CREATE TABLE stock(
	id_stock int(10) auto_increment,
	id_art int(10)references articulos,
    id_color int(10)references colores,
    id_talla int(10)references tallas,
	unidades int(10) not null,
    primary key(id_stock)
);

Select * from articulos;
Select * from colores;
Select * from tallas;
Select * from stock ;
Select * from users;



Select USERS.id,name,ARTICULOS.id_art,descripcionarticulo,STOCK.id_stock,unidades,COLORES.id_color,color,TALLAS.id_talla,Talla
		from users
			INNER JOIN ARTICULOS ON users.id=articulos.id
            INNER JOIN STOCK ON ARTICULOS.id_art=STOCK.id_art
            INNER JOIN COLORES ON COLORES.id_color=STOCK.id_color
            INNER JOIN TALLAS ON TALLAS.id_talla=STOCK.id_talla where articulos.id_art=9736;



Insert into colores values(1,'rojo');
Insert into colores values(2,'gris');
Insert into colores values(3,'azul');
Insert into colores values(4,'verde');

Insert into tallas values(1,'xs');
Insert into tallas values(2,'s');
Insert into tallas values(3,'m');
Insert into tallas values(4,'l');

Insert into stock values(1,9736,1,1,50);
Insert into stock values(2,12345,1,2,20);
Insert into stock values(3,12345,1,3,30);
Insert into stock values(4,9736,3,4,10);