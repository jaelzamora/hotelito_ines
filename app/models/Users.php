<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent
{
    public function scopeRegister()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $psswd = md5($post['password']);
        if (
            !empty($post['name']) && (!empty($post['email'])) && (!empty($post['password'])) && (!empty($post['password2']))

        ) {
            if ($post['password'] == $post['password2']) {
                $this->name = $post['name'];
                $this->email = $post['email'];
                $this->password = $psswd;

                $this->save();
            } else {
                $error = 'The passwords do not match';
                Messages::setMsg($error, 'error');
                return;
            }
        } else {
            $error = 'The register data is incomplete';
            Messages::setMsg($error, 'error');
            return;
        }
    }

    public function scopeLogin($query)
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $psswd = md5($post['password']);
        
        if (
             (!empty($post['email'])) && (!empty($post['password']))
    
        ) {
            $user = $query->where('email', $post['email'])->first();
         
            if($user){
                if($psswd == $user->password){
                    
                    // Last login en base de datos que no tengo en hotel 
                    // $currentTime = date('Y-m-d h:i:s', time());
                    // $user->last_login = $currentTime; //meter en base de datos
                    // $user->save();
                    
                    $userData = [
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => $user->role,
                    ];

                    $_SESSION['is_logged_in'] = true; //ahora esta loggeado
                    $_SESSION['user_data'] = $userData; //guardar en session todos los datos de usuario

                    // //Cookies remember
                    
                    // if(!empty($_POST["remember"])) {
                    //     setcookie ("remember_email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
                        
                    //     $salt = rand(10000, 1000000); //numero random entre 10000 y 1000000
                    //     $randomNumber = $salt * $salt; //elevamos al cuadrado
                    //     $token = dechex($randomNumber); //pasamos a hexadecimal
                    //     $encrypt = sha1($token); //encriptamos en sha1
                    //     $user->token = $token;
                    //     $user->salt = $salt;
                    //     $user->save();
                        
                    //     //Crear cookie para mantener sesion iniciada
                    //     setcookie("remember", $user->email . ','. $encrypt, time() + 3600 * 24 * 30, ROOT_PATH);

                    // } else {
                    //     if(isset($_COOKIE["remember_email"])) {

                    //         //Crear cookie para autocompletar email
                    //         setcookie ("remember_email","");
                    //     }
                    // }

                    Messages::setMsg('You are now logged in! <br> Last login: ' . $currentTime  , 'success');
                    header('Location: ' .ROOT_URL);
                }else{
                    
                     Messages::setMsg('Incorrect Password', 'error');
                }
            }else{
                Messages::setMsg('Incorrect Login', 'error');
            }

        }else{
            $error = 'The login data is incomplete';
            Messages::setMsg($error, 'error');
            return;
        }
    }
}
