<?php
function _borrar($url = '') {
    precondition::url($url);
    $producto = new Producto();
    $producto->retrieve_one("url=?", $url);
    precondition::producto($producto);
    $producto->delete();
    header("Location: ".WEB_FOLDER);
}
?>
