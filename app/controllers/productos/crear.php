<?php
function _crear() {
    if(!(isset($_POST, $_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['url']))) {
        View::do_dump(APP_PATH.'views/productos/error.php', array('mensaje' => "El formulario no se envió correctamente"));
        exit;
    }
    $producto = new Producto();
    $producto->nombre = $_POST['nombre'];
    $producto->precio = $_POST['precio'];
    $producto->stock  = $_POST['stock'];
    $producto->url    = $_POST['url'];
    if(isset($_POST['id'])) {
        $producto->id = $_POST['id'];
        $producto->update();
    } else {
    	$producto->create();
    }
    header("Location: " . WEB_FOLDER . "productos/ver/" . $producto->url);
}
?>
