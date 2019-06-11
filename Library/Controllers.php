<?php
class Controllers{

    function __construct() {
        //creando una propiedad:view e instanciando la clase:Views;
        $this->view = new Views();
        $this->loadClassModels();
    }

    function loadClassModels(){
        //obteniendo nombre de la clase
        $model = get_class($this)."_model";
        //seteando ruta con la clase
        $path = "Models/".$model.".php";

        //validar si el archivo existe en la ruta
        if (file_exists($path)){
            //si existe: hacer un require para utilizar dicho archivo
            require $path;
            //creando una propiedad:model e instanciando la el modelo que se obtuvo en la variable:$model
            $this->model = new $model();
        }
    }

}


/*-------------------
 *class: Controller
 * ------------------
 * properties:
 *      view: Views()
 *      model: Model_Name()     ----> el nombre de este modelo es dinamico, cambia segun se instancie
 * ------------------
 * methods:
 *      loadClassModels()
 * ------------------
*/
