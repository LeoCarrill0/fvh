<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginusr extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function login() {
        
        session_start();
        
        if(isset($_SESSION['rol'])){
            switch($_SESSION['rol']){
                case 1:
                    header('location: ../dashboard/admin');
                break;

                case 2:
                    header('location: ../dashboard/alumnos');
                break;

                default:
            }
        }
        
        if(isset($_POST['username']) && isset($_POST['password'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $db = new Database();
            $query = $db->connect()->prepare('SELECT *FROM usuario WHERE nombreusuario = :username AND contraseniausuario = :password');
            $query->execute(['username' => $username, 'password' => $password]);

            $row = $query->fetch(PDO::FETCH_NUM);
            
            if($row == true){
                $rol = $row[3];
                
                $_SESSION['rol'] = $rol;
                switch($rol){
                    case 1:
                        header('location: ../dashboard/admin');
                    break;

                    case 2:
                        header('location: ../dashboard/alumnos');
                    break;

                    default:
                }
            }else{
                $errorLogin = "Nombre de usuario o contraseña incorrecta";
            }
            

        }
    }
}

?>