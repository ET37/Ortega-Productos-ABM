<html>
    <head>
        <title><?=$GLOBALS['sitename'];?></title>
    </head>
    <body>
        <form method="POST" action="<?=WEB_FOLDER.'productos/crear';?>">
            <p>Nombre: <input type="text" name="nombre" value="<?=$nombre?>"/></p>
            <p>Precio: <input type="text" name="precio" value="<?=$precio?>"/></p>
            <p>Stock:  <input type="text" name="stock" value="<?=$stock?>"/></p>
            <P>URL:    <input type="text" name="url" value="<?=$url?>"/></p>
            <?=isset($id) ? "<p><input type='hidden' name='id' value='{$id}'/></p>" : ""?>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>
