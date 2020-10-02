<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">

    <title>Tutox/QuienesSomos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/resources/css/estilo.css" rel="stylesheet">

    
  </head>
  <body style="background-color: #D3D3D3;">

    <nav class="navbar navbar-expand-md navbar-dark " style="background-color:#696969;">
      <img src="<?php echo base_url();?>/resources/img/t.ico" alt="">
      <a class="navbar-brand" href="#">Tutox</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>/Portada/index">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/Portada/somos">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>/Portada/cursos">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Foros</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <!-- AQUI CREO LOS LOGINS -->
        <!-- 1) INGRESA CON RED SOCIAL -->
        <div class="navbar-nav ml-auto action-buttons">
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Ingresar</a>
                <div class="dropdown-menu action-form">
                  <form action="/examples/actions/confirmation.php" method="post">
                    <p class="hint-text">Ingresa con tu cuenta</p>
                    <div class="form-group social-btn clearfix">
                      <a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
                      <a href="#" class="btn btn-secondary google-btn float-right"><i class="fa fa-google"></i> Google</a>
                    </div>
                    <div class="or-seperator"><b>or</b></div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Usuario" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Clave" required="required">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                    <div class="text-center mt-2">
                      <a href="#">Olvidaste tu contraseña?</a>
                    </div>
                    <div class="text-center mt-2">
                      <!--<a href="#">Registrarse</a>-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrarse</button>
                    </div>
                  </form>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #AFAEAE;">
                        <h2 style="color:#FF1493;font-weight: bold;">INSCRIPCIÓN</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" style="background-color: #AFAEAE;">
                        <div class="card panel1" style="width: 100%;height: 100%;">
                          <div class="card-body">
                            <!--<?php $validation = \Config\Services::validation(); ?>
                            <?= form_open('Portada/doSave', array('id' => 'frmreg','name' => 'frmreg')) ?>-->
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="nombre">Nombre :</label>
                                <input type="text" class="form-control" id="nombre"
                                 name="nombre" title="Solo alfanumericos" placeholder="Ingresar Nombre" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="apellidos">Apellidos :</label>
                                <input type="text" class="form-control" id="apellidos"
                                 name="apellidos" title="Solo alfanumericos" placeholder="Ingresar Apellidos" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="correo">Correo :</label>
                              <input type="email" class="form-control" id="correo"
                            name="correo" title="Formato correo" placeholder="Ingresar Correo" required>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="fecha">Dirección :</label>
                                <input type="text" class="form-control" id="dir"
                               name="dir" title="Solo alfanumericos" placeholder="Ingresar Direccion" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="tel">Teléfono :</label>
                                <input type="text" class="form-control" id="tel"
                                name="tel" title="Solo digitos" placeholder="Ingresar Telefono">
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="fecha">Fecha Nacimiento :</label>
                                <input type="date" class="form-control" id="fecha"
                               name="fecha" title="Formato Fecha" placeholder="Ingresar Fecha Nacimiento" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="dni">DNI :</label>
                                <input type="text" class="form-control" id="dni"
                                name="dni" title="Solo digitos" placeholder="Ingresar DNI">
                              </div>
                            </div>
                              <div class="form-group">
                                <label for="sexo">Sexo :</label>
                                <select name="sexo" id="sexo" class="custom-select">
                                <option selected>Seleccionar</option>
                                <option value="0">Femenino</option>
                                <option value="1">Masculino</option>
                              </div>
                              </select>
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-dark form-control">REGISTRAR</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
      </div>
      </div>
    </div>
    </nav>

      <div>
        <img src="<?php echo base_url();?>/resources/img/alfabetizaciondigital.jpg" class="d-block w-100" alt="..." style="width: 100%">
      </div>


      <div class="card">
        <h5 class="card-header">INFORMACIÓN</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">MISIÓN</h5>
                  <p class="card-text">Consiste en apoyar a los usuarios con el uso de las herramientas digitales. </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">VISIÓN</h5>
                  <p class="card-text">Ser la aplicación web de soporte de la alfabetización digital más reconocida a nivel nacional, que ayuda a personas a mejorar sus habilidades tecnológicas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer>        
        <p class="float-right tex"><a href="#">Back to top</a></p>
        <p class="text-center">&copy; 2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
