<?php
function _editar($url = '') {
    precondition::url($url);
    $prod = new Producto();
    $prod->retrieve_one("url=?", $url);
    precondition::producto($prod);
    View::do_dump(APP_PATH.'views/productos/editar.php', array(
        'id'     => $prod->id,
        'nombre' => $prod->nombre,
        'precio' => $prod->precio,
        'stock'  => $prod->stock,
        'url'    => $prod->url
    ));
}
