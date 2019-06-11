<?php
class Views{

    //funcion para renderizar las vistas
    function render($controller, $view){

        $controllers = get_class($controller); //Login

        require VIEWS.DFT."head.html";

        require VIEWS.$controllers."/".$view.".html"; // Views/Login.html

        require VIEWS.DFT."footer.html";
    }

    function renderLogin($controller, $view){

        $controllers = get_class($controller);

//        require VIEWS.DFT."head.html";

        require VIEWS.$controllers."/".$view.".html";

//        require VIEWS.DFT."footer.html";
    }

}
