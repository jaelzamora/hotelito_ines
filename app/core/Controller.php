<?php

class Controller {
    protected $controller;

    public function __construct($name)
    {
        $this->controller = $name;
        $this->remember();
    }

    public function view($view, $data = [])
    {
        require_once 'app/views/' . $this->controller . '/' . $view . '.php';
    }

    public function remember()
    {
      
        if (isset($_COOKIE['remember'])) {
            echo "kk1";
            $remember = explode(",",$_COOKIE['remember']);
            $user = Users::where('email', $remember[0])->first();
            $key = $remember[1]; 
            $token = sha1($user->token);

            if ($key != $token) {
                setcookie("remember", "", time() - 3600, ROOT_PATH);
                session_destroy();
            }else{
                
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = $user;
            }
        }
    }
}