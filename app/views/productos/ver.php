<?php require(APP_PATH."inc/helpers_producto.php"); ?>
<html>
    <head>
        <title><?=$GLOBALS['sitename']?></title>
    </head>
    <body>
        <h1><?=$producto->nombre?></h1>
        <p>Precio: $<?=$producto->precio?></p>
        <p>Stock: <?=$producto->stock?> unidades</p>
        <a href="<?=editar($producto)?>">Editar</a>
        <a href="<?=borrar($producto)?>">Borrar</a>
        <br/><a href="<?=WEB_FOLDER.'productos/listar'?>">Listado</a>
    </body>
</html>
