<!doctype html>
<html lang="en" style=" min-height: 100%;position: relative;">
  <head>
    <script type="text/javascript" src="http://localhost/pagina/js/script1.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Bienvenido</title>
    <style type="text/css">
      body{
        display: flex;
         min-height: 100vh;
        flex-wrap: wrap;
      }
      #f{
        align-self: flex-end;
       
      }
    </style>
  </head>

  <body style="background-image: url(<?php echo base_url();?>Assets/imagenes/fp.png);background-repeat:no-repeat;background-size: 100% 100%;" onload="entrada()">

<nav class="navbar navbar-expand-lg " style="background-color:#5D99C6;width: 100%;height: 10%;">
   <a class="navbar-brand" href="#">
    <img src="<?php echo base_url();?>Assets//imagenes/logohidalgo.png" width="60" height="40" alt="">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="background-image:url(<?php echo base_url();?>Assets/imagenes/boton.png);background-repeat:no-repeat;background-size:100% 100%; size:50px 44px;background-position: center;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" style="">
          <a class="nav-link" href="padre"style="color: #FFFFFF;padding-left: 20px;padding-right: 5px;">Inicio<span></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Calificaciones" style="color: #FFFFFF;padding-left: 20px;padding-right: 5px;">Calificaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Avisos" style="color: #FFFFFF;padding-left: 20px;padding-right: 30px;">Avisos</a>
        </li>
        <li class="nav-item dropdown" style="background-color: #154360;">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;padding-left: 20px;padding-right: 5px;">
         MI CUENTA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cuenta">Información cuenta</a>
          <a class="dropdown-item" href="">Cerrar sesión</a>
        </div>
      </li>
      </ul>
    </div>
  </nav>
  

  
  <?php
  if(session_start())
  {
// Devolver los valores de sesión
// Establecer tiempo de vida de la sesión en segundos
    $inactividad = 5;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location:http://localhost/pagina/imss/index");
        }
    }
    // El siguiente key se crea cuando se inicia sesión
    $_SESSION["timeout"] = time();
  }
else
{
  header("Location:http://localhost/pagina/imss/index");
}
  ?>}
