<?php
class Index extends Controllers {
    function __construct() {
        //inicializando el constructor de la clase padre:Controllers
        parent::__construct();
    }

    public function index(){
        //utilizando la propiedad view de la clase padre:Controllers para llamar al metodo render
        $this->view->render($this, "index");
    }
}
