<?php 
include("..\Modelo\Modelo.php");
include("..\Vistas\login.php");
include("..\Vistas\\registrarse.php");
session_start();
          
              if(isset($_REQUEST['Acceso'])=='1'){
                    $user=$_POST['usuario'];  
                    $pass=$_POST['password'];
                    $model=new Usuario_Model();
                    $resultado=$model->comprobarUsuario($user,$pass);

                    if($resultado==true){
                     echo"<script>window.location=\"../Vistas/cabecera.html\"</script>";

                      }else{
                       $clase=new login();//creo la clase login
                       $clase->cargar("");//lanzo la funcion de la clase cargar();
                      }
                  
              }

              if(isset($_REQUEST['Registro'])){
                $clase=new registrar();//creo la clase login
                $clase->cargar("");//lanzo la funcion de la clase cargar();
              }
              if(isset($_REQUEST['Registrarse']) && isset($_REQUEST['Acceso'])!='1' ) // viene del boton index registrarse
              {
                 
                 $user=$_POST['usuario']; 
                 $pass=$_POST['password'];
                 $nombre=$_POST['nombre'];
                 $model=new Usuario_Model();
                 $usuariocreado=$model->comprobarUsuario($user);
                if($usuariocreado==false)
                  {
                       $resultado=$model->crearUsuario($user,$pass,$nombre);

                    if($resultado==true) 

                      {
                       $clase=new login();//creo la clase login
                       $clase->cargar("UsuarioCreadoconExito");//lanzo la funcion de la clase cargar();
                       }

                      }else{
                         $clase=new registrar();//creo la clase login
                         $clase->cargar("UsuarioCreado");//lanzo la funcion de la clase cargar();
                  }  

              }

?>