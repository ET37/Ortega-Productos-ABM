<?php
require(APP_PATH."inc/helpers_producto.php");
$productos = (new Producto())->retrieve_many();
// Podría recibir el array de productos para hacer esto una lista genérica y 
// poder usarlo como render de búsquedas y otras yerbas
?>

<html>
    <head>
        <title><?=$GLOBALS['sitename']?></title>
    </head>
    <body>
        <h1>Productos</h1>
        <h3><a href="<?=WEB_FOLDER."productos/nuevo"?>">Nuevo producto</h3>
        <div name="productos">
            <?php foreach($productos as $prod): ?>
            <div name="<?=$prod->url?>">
                <p><?=alink(ver($prod), $prod->nombre)?> - <?=$prod->precio?></p>
                <p><?=$prod->stock?> en stock</p>
                <p>¿<?=alink(editar($prod), "Editar")?> o <?=alink(borrar($prod), "borrar")?>?</p>
            </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
