<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">

  <title>Tutox</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>



  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/resources/css/estilo.css" rel="stylesheet">

  
</head>


<body>
  <header>
    
    <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#58C9B9;">
      <img src="<?php echo base_url();?>/resources/img/t.png" alt="">
      <a class="navbar-brand" href="<?php echo base_url();?>/Login/Administrador">Tutox</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#58C9B9; ">
            <img src="<?php echo base_url();?>/resources/img/69524.png" style="width: 19px; height: 18px;">
            <a class="nav-link" href="<?php echo base_url();?>/Login/Administrador">Inicio</a>
          </li>
          <li class="nav-item">
            <nav class="navbar navbar-expand-md navbar-dark " >
            <img src="<?php echo base_url();?>/resources/img/somos2.png" style="width: 19px; height: 18px;">
            <a class="nav-link" href="<?php echo base_url();?>/Login/somos">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#58C9B9;">
            <img src="<?php echo base_url();?>/resources/img/curso.png" style="width: 19px; height: 18px;">
            <a class="nav-link" href="<?php echo base_url();?>/Login/cursos">Cursos</a>
          </li>

             <?php 
                  $session = \Config\Services::session(); 
                  if($session->has('email')){?>

        </ul>
        
        

           
              
                   <div class="dropdown">
                       <button class="btn btn-info  dropdown-toggle" type="button" data-toggle="dropdown"><i  class="fas fa-user fa-fw"></i>  <?php echo $session->get('nombre')." ".$session->get('ape'); ?> <span class="caret"></span></button>
                       <ul class="dropdown-menu dropdown-menu-right" >
                      <li><a class="dropdown-item disabled" ><?php echo $session->get('email'); ?></a></li>
                      <hr/>
                      <li> <a class="dropdown-item" href="<?php echo base_url().'/obtenerCursoFavorito/'.$session->get('email');?>"><i class="fas fa-book"></i> Cursos Favoritos</a></li>
                      <hr/>
                       <li><a class="dropdown-item" href="<?php echo base_url();?>/Login/Perfil"><i class="fas fa-user-alt"></i> Perfil</a></li>
                       <li><a class="dropdown-item" href="<?php echo base_url();?>/Login/modificarContraseña"><i  class="fas fa-user-edit"></i> Modificar Contraseña</a></li>
                       <hr />
                       <li><a class="dropdown-item" href="<?php echo base_url();?>/login/cerrarsesion"><i class="fas fa-door-open"></i> Salir</a></li>
                       </ul>
                  </div>

        <?php } ?>    
    </div>
  </nav>

</header>