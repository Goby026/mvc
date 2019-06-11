<?php
class Login extends Controllers {
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->renderLogin($this, "login");
    }

    public function login(){

        $user = $_POST['email'];
        $pass = $_POST['password'];

        echo $this->model->login($user, $pass);


    }
}
