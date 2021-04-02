<?php
# alumno.controller.php
require_once 'model/login.php';

class LoginController{
    private $model;
    public $alert=['danger'=>null,'success'=>null,'message'=>null];
    #============
    public function __CONSTRUCT(){
        $this->model = new Login();
    }
    #============
     // ['success'=>null,'message'=>"null"]
     // ['danger'=>null,'message'=>"null"]
    public function Index(){
        // require_once('view/header.php');
        $alert = $this->alert;
        require_once('view/login/login.php');
        // require_once('view/footer.php');
    }
    #============
    public function Auth(){
        $recarga = new Login();
        if(isset($_REQUEST['btnlogear'])){
            $usuario = $_REQUEST['txtUsuario'];
            $password = $_REQUEST['txtContrasena'];
            $recarga = $this->model->Logeo($usuario);
            if(!$recarga){
                // $mensaje="Usuario o contraseña incorrectos. Por favor, verifique la información.";
               $this->alert['danger'] = true;
               $this->alert['message'] = "Usuario o contraseña incorrectos. Por favor, verifique la información.";
                $this->Index();
                // header('Location: index.php');
            }else{
                if($password == $recarga->contrasena){
                    $_SESSION["id"]=$recarga->id_usuarios;
                    $_SESSION["user"]=ucfirst($recarga->login);
                    $_SESSION["nombre"]=ucfirst($recarga->nombre);
                    // $_SESSION["pass"]=$recarga->contrasena;
                    header('Location: index.php');
                    // $this->Index();
                }else{
                  $this->alert['danger'] = true;
                  $this->alert['message'] = "Usuario o contraseña incorrectos. Por favor, verifique la información.";
                    $this->Index();
                }
            }
        }
    }
    public function CerrarSesion(){
        session_destroy();
        // usando unset es para eliminar uno por uno mas seguro elimina todas las variables temporales
        unset($_SESSION["id"]);
        unset($_SESSION["user"]);
        unset($_SESSION["pass"]);
        //forma mas segura 2 elimina los cookie que contiene el Id de la sesión,
        $parametros_cookies = session_get_cookie_params();
        setcookie(session_name(),0,1,$parametros_cookies["path"]);
        //forma mas segura 3
        /*
        session_destroy();
        if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
        }
        */
        //Por último destruimos la sesión
        session_destroy();
        header('Location: index.php');
    }
}