<?php
class Producto extends Model {
    function Producto() {
        parent::__construct("id", "productos", "getdbh");
        $this->rs["id"]     = "";
        $this->rs["nombre"] = "";
        $this->rs["precio"] = "";
        $this->rs["stock"]  = "";
        $this->rs["url"]    = "";
    }
}
