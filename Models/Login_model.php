<?php
class Login_model extends Conexion {

    function __construct() {
        parent::__construct();
    }

    public function login($user, $pass){
//        echo "Modelo Login preparado";
        if ($user != "grover@mail.com"){
            return "bad_user";
        }else{
            if ($pass != "123456"){
                return "bad_pass";
            }else{
//                $this->view->render($this, "index");
                return "ok_req";
            }
        }
    }
}
