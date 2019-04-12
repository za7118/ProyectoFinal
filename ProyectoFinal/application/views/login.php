
<!DOCTYPE html>
<html lang="es">
    
<head>
<script type="text/javascript" src="<?php echo base_url();?>Assets/js/script1.js"></script>
  <title>Jardin de niños IMSS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 <!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
     /* background: #E0E0E0!important;*/
     background-image:url(<?php echo base_url();?>Assets//imagenes/ff.png);
     background-repeat:no-repeat;
      width: 100%; height: 100; 
     background-size: 100% 100%;

    }
    .user_card {
      height: 400px;
      width: 350px;
      margin-top: auto;
      margin-bottom: auto;
      background-image:url(<?php echo base_url();?>Assets//imagenes/fl.png);
     background-repeat:no-repeat;
     background-size: 100% 100%;
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 5px;

    }
    .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 170px;
      top: -75px;
      border-radius: 50%;
      background-image:url(<?php echo base_url();?>Assets/imagenes/fl.png);
     background-repeat:no-repeat;
     background-size: 100% 100%;
      padding: 10px;
      text-align: center;
    }
    .brand_logo {
      height: 150px;
      width: 150px;
      border-radius: 50%;
      border: 2px solid white;
    }
    .form_container {
      margin-top: 100px;
    }
    .login_btn {
      width: 100%;
      background: #c0392b !important;
      color: white !important;
    }
    .login_btn:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .login_container {
      padding: 0 2rem;
    }
    .input-group-text {
      background: #c0392b !important;
      color: white !important;
      border: 0 !important;
      border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
      background-color: #c0392b !important;
    }
</style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body onload="saludo()">
  <div class="container h-100" style="position: relative;top: 0px;">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="<?php echo base_url();?>Assets/imagenes/login.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container" style="text-align: center;">
          <form action="sistema/iniciar" method="post">
            <a style="position: relative;bottom: 20px;font-size: 30px;color:#D62719;font-weight: bold;">Iniciar sesión</a>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="us" class="form-control input_user" value="" placeholder="usuario" required="">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="pas" class="form-control input_pass" value="" placeholder="Password" required="">
            </div>
               <div class="d-flex justify-content-center mt-3 login_container">
          <input type="submit" name="button" class="btn login_btn" value="Ingresar" />
        </div>
          </form>
        </div>
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            <a href="recuperar" style="color:white;"> ¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
// if(session_start())
//   {
//  header("Location:http://localhost/pagina/imss/padre");
//   }
?>


</body>
</html>