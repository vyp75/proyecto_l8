use proyecto;

show tables;
select * from nuevo_registros ;


Select sum(unidades) from stock where id_stock=1;

Select * from stock inner join tallas using(id_talla)
inner join colores using (id_color)
where id_stock = 1;

Select sum(unidades_nuevas) from nuevo_registros where id_stock=1;
Select count(id_stock) from stock;
update stock join nuevo_registros 
				 on stock.id_stock=nuevo_registros.id_stock
                 set unidades= unidades+nuevo_registros.unidades_nuevas;
                 
                 
SET GLOBAL event_scheduler = ON;
drop event evento_unidades;
DELIMITER //

CREATE EVENT evento_unidades
ON SCHEDULE EVERY 1 minute
STARTS '2021-02-18 17:21:00'
DO
BEGIN               
  DECLARE v_id INT;
  DECLARE v_unidades BIGINT;
  DECLARE final INTEGER DEFAULT 0;
  DECLARE cursor_unidades CURSOR FOR
  
    SELECT id_stock,unidades_nuevas FROM nuevo_registros;

  DECLARE CONTINUE HANDLER FOR NOT FOUND SET final=1;

  OPEN cursor_unidades;
  buclecito: LOOP
    FETCH cursor_unidades INTO v_id, v_unidades;
    IF final = 1 THEN
       LEAVE buclecito;
    END IF;
    update stock set unidades= unidades+v_unidades
                 where id_stock=v_id;
  END LOOP buclecito;
  CLOSE cursor_unidades;
  truncate table nuevo_registros;
  

END //
DELIMITER ;
Select * from stock;







