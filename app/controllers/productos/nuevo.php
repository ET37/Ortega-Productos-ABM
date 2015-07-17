<?php
function _nuevo() {
    View::do_dump(APP_PATH.'views/productos/editar.php', array(
        'nombre' => '',
        'precio' => '',
        'stock'  => '',
        'url'    => ''
    ));
}
