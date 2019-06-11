<?php
class Conexion{
    function __construct(){
        $this->bd = new QueryManager("root","","bdtecnoserv");
    }
}
