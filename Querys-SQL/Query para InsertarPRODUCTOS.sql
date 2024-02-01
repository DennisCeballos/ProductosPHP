START TRANSACTION;

-- Insert a productos
INSERT INTO `paginadproductos`.`producto`
(`Nombre`, `Puntuacion`, `Imagen`)
VALUES
(
'Peluche bueno bueno', 5, 'https://w0.peakpx.com/wallpaper/278/612/HD-wallpaper-pepe-on-laptop-working-pepe-funny-cool.jpg' 
);

SET @last_product_id = LAST_INSERT_ID();

-- Insert a precio
INSERT INTO `paginadproductos`.`precio`
(`IdProducto`, `PrecioUnico`, `PrecioLiquidacion`, `PrecioSuperior`, `PrecioInferior`)
VALUES
(@last_product_id, 23.99, null, null, null);

COMMIT