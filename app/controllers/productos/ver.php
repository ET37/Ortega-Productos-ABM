<?php
function _ver($url = '') {
    precondition::url($url);
    $producto = new Producto();
    $producto->retrieve_one("url=?", $url);
    precondition::producto($producto);
    View::do_dump(APP_PATH.'views/productos/ver.php', array('producto' => $producto));
}
