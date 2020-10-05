<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">



    <title>Tutox/Cursos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/resources/css/estilo.css" rel="stylesheet">

    <style>
    .youtube-player {position: relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;background:#000;margin:8px 0 8px 0;}
    .youtube-player iframe {position:absolute;top: 0;left:0;width:100%;height:100%;z-index:100;background: transparent;}
    .youtube-player img {bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top: 0;border:none;height:auto;cursor:pointer;-webkit-transition: .4s all;-moz-transition: .4s all;transition: .4s all;}
    .youtube-player img:hover {-webkit-filter:brightness(75%);}
    .youtube-player .play {height:72px;width:72px;left:50%;top:50%;margin-left:-36px;margin-top:-36px;position:absolute;background: url("<?php echo base_url();?>//i.imgur.com/TxzC70f.png") no-repeat;}
    </style>

    
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
                            <h3 style="color:#FF1493;font-weight: bold;">INSCRIPCIÓN</h2>
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
          <div class="container-fluid ">

          <div class="card" style="background-color: #C1CDCD;">
            <div class="card-header" style="background-color: #989797;">
              <h2 class="text-center" style="color: #FF1493; font-weight: bold;">CURSOS BÁSICOS</h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Word
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="pbvwCTld8BA"></div>
                      <!--<iframe width="100%" height="150" src="https://www.youtube.com/embed/pbvwCTld8BA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                      
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HER2iysxcQZiE-TBITT1AAg">Ir al curso</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Excel
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="yKWFMgurUnU"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HHfkyWNgMWSvTq6RlUGusgN">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      PowerPoint
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="pDfZOFtdF-A"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HH8-CK0uz4ZoSSb1Dl_Wa1l">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Facebook para Negocios
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="AuMKOE5kODI"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLO4t0hJwoloh98SGV9r0oh5W9ICRdkAbU">Ir al curso</a>
                    </div>              
                  </div>
                </div>
              </div>
            </div>
        
          </div>    
        </div>
     
        <div class="container-fluid ">

          <div class="card" style="background-color: #C1CDCD;">
            <div class="card-header" style="background-color: #989797;">
              <h2 class="text-center" style="color: #FF1493; font-weight: bold;">CURSOS AVANZADOS</h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Programacion con Java
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="SNlDPxqjI2Y"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLIRq7nByT7aQLRzBkf66cjkZ62HefyIfK">Ir al curso</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Diseño de BD
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="JKMEDTfUZ58"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLg9145ptuAig5eqBYvOuMdpTP2ORUNXbf">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      SQL Server
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="bW-NYf606fM"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PL6hPvfzEEMDaU4aiS389oXamdN8sip856">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      PHP
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="Q21XLsP2bsY"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HHjgr9iFg03MDa2lvLkywRQ">Ir al curso</a>
                    </div>              
                  </div>
                </div>
              </div>
            </div>
        
          </div>    
        </div>
        <div class="container-fluid ">

          <div class="card" style="background-color: #C1CDCD;">
            <div class="card-header" style="background-color: #989797;">
              <h2 class="text-center" style="color: #FF1493; font-weight: bold;">DISEÑO GRÁFICO</h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Photoshop
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="4-VMuLs99Ss"></div>                  
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HEG5xw-Vxf4k9S7mj8NI8zt">Ir al curso</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      Illustrator
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="x2KT6A7XfR4"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLvcuHw395y0z53Uq6P5stWF69JbWqEbs8">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      InDesign
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="8I57LQwOaMg"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLk1a7GV9V43sPF9GOG0CEf8yMQyopz9yB">Ir al curso</a>
                    </div>              
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      CorelDraw
                    </div>
                    <div class="card-body">
                      <div class="youtube-player" data-id="6uHRKhSa6Cw"></div>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-block" target="_blank" href="https://www.youtube.com/playlist?list=PLLniqWgyb4HEDUMowVLOveh5uJ0jiodru">Ir al curso</a>
                    </div>              
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

     <script>
        /* Light YouTube Embeds by @labnol */
        /* Web: http://labnol.org/?p=27941 */
        document.addEventListener("DOMContentLoaded",
            function() {
                var div, n,
                    v = document.getElementsByClassName("youtube-player");
                for (n = 0; n < v.length; n++) {
                    div = document.createElement("div");
                    div.setAttribute("data-id", v[n].dataset.id);
                    div.innerHTML = labnolThumb(v[n].dataset.id);
                    div.onclick = labnolIframe;
                    v[n].appendChild(div);
                }
            });
        function labnolThumb(id) {
            var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
                play = '<div class="play"></div>';
            return thumb.replace("ID", id) + play;
        }
        function labnolIframe() {
            var iframe = document.createElement("iframe");
            var embed = "https://www.youtube.com/embed/ID?autoplay=1";
            iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "1");
            this.parentNode.replaceChild(iframe, this);
        }
    </script>

  </body>
</html>
