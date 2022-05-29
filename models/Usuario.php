<?php
session_start();
    class Usuario extends Conectar {
        
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["user_correo"];
                $pass = $_POST["user_pass"];
                if(empty($correo) and empy($pass)){
                    header("Location".conectar::ruta()."index.php?m=2");
                    exit(); 
                } else {
                    $sql = "SELECT * FROM tm_usuario where user_correo=? and user_pass=? and estado = 1 ";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2,$pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado)and count($resultado)>0){
                        $_SESSION['user_id']=$resultado['user_id'];
                        $_SESSION['user_nom']=$resultado['user_nom'];
                        $_SESSION['user_pass']=$resultado['user_pass'];
                        header("Location:".Conectar::ruta()."view/Home/");
                        exit();
                    } else{
                        header("Location".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }

?>