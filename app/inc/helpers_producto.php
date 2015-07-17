<?php
function alink($url, $texto) {
    return "<a href='{$url}'>{$texto}</a>";
}
function editar($producto) {
    return WEB_FOLDER."productos/editar/".$producto->url;
}
function borrar($producto) {
    return WEB_FOLDER."productos/borrar/".$producto->url;
}
function ver($producto) {
    return WEB_FOLDER."productos/ver/".$producto->url;
}
?>
