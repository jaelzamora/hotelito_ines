<?php

class UsersController extends Controller
{

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->view('register.html');
        } else {
            Users::register();
            if (!$_SESSION['errorMsg']) {
                header("Location:" . ROOT_PATH);
            } else {
                header("Location:" . ROOT_PATH . "users/register");
            }


            //header("Location:" . ROOT_PATH);

        }
    }

    public function login()
    {
        // echo '<pre>';
        // var_dump($this);
        // die;

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->view('login.html');
        } else {
            Users::login();
            if (!$_SESSION['errorMsg']) {
                header("Location:" . ROOT_PATH);
            } else {
                header("Location:" . ROOT_PATH . "users/login");
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['is_logged_in'])) {
            setcookie("remember", "", time() - 3600, ROOT_PATH);
            session_destroy();
            header("Location:" . ROOT_URL);
        }
    }
}
