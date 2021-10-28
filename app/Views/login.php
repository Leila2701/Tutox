<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
    <title>Tutox - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
         <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/resources/css/login.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: radial-gradient(circle, #ffffff, #f0f2f9, #dde7f2, #c6dde9, #aed3dc);">

   

<div class="container">
<div id="login" class="signin-card">
  <div class="logo-image text-center">
  <img   src="<?php echo base_url();?>/resources/img/candado.png" alt="Logo" title="Logo" width="138" >
  </div>
  <h1 class="display1 text-center">Ingresar</h1>
  <?php $validation = \Config\Services::validation(); ?>
                                <form class="form-signin" action="<?php echo base_url();?>/Login/doLogin">
                                    <?php if($validation->getError('user')) {?>
                                        <div class='alert alert-danger mt-2'>
                                            <?= $error = $validation->getError('user'); ?>
                                        </div>
                                    <?php }?>
                                    <?php if($validation->getError('pass')) {?>
                                        <div class='alert alert-danger mt-2'>
                                            <?= $error = $validation->getError('pass'); ?>
                                        </div>
                                    <?php }?>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                         id="exampleInputEmail" aria-describedby="emailHelp" name="user"
                                         placeholder="Introduzca direccion de correo electronico...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="pass"
                                         id="InputPassword" placeholder="Contraseña">
                                    </div>
                                    
                                    
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
                                       
                                    </form>
                                    <br>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url();?>/Login/OlvidoContraseña">¿Se te olvidó tu contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url();?>/cnPersona/index">Registrarse</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url();?>/Portada/index">Regresar a la portada</a>
                                    </div>
</div>
</div>
  

    <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>