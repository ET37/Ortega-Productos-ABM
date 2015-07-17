<?php
class precondition {
    static function url($url) {
    	if($url == '') {
    	    View::do_dump(APP_PATH.'views/productos/error.php', array('mensaje' => "No se ha seleccionado un producto"));
	        exit;
	    }
	}
	static function producto($producto) {
    	if(!$producto->exists()) {
    	    View::do_dump(APP_PATH.'views/productos/error.php', array('mensaje' => "El producto seleccionado no existe"));
    	    exit;
	    }
	}
}
?>
