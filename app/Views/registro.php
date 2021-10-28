<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
      <title>Tutox - Registro</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- js para que reconozca-->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../../../../assets/js/vendor/holder.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
      <!-- js para que reconozca END-->
      <!-- Custom styles for this template-->
      <link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body class="bg-gradient-primary" style="background-image: radial-gradient(circle, #ffffff, #f0f2f9, #dde7f2, #c6dde9, #aed3dc);">
      <script src ="<?=base_url()?>/resources/js/jsPersona.js"> </script>
      <script> 
         ruta='<?= base_url ()?>';
         $(document).ready(function(){doaction();
         });
      </script>
      <div class="container">
         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               <?php $validation = \Config\Services::validation(); ?>
               <?= form_open('#', array('id' => 'frmreg','name' => 'frmreg')) ?>
               <!-- Nested Row within Card Body -->
               <div class="row">
                  <div class="col-lg-5 d-none d-lg-block">
                     <img src="<?php echo base_url();?>/resources/img/tutox.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 100%;">
                  </div>
                  <div class="col-lg-7">
                     <div class="p-5">
                        <div class="text-center">
                           <h1 class="h4 text-gray-900 mb-4">
                              ¡Crea una cuenta!
                           </h1>
                        </div>
                        <div class="alert alert-danger"  id="error" >
                           <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                           <span class="sr-only">Error:</span>
                           <p id="mensaje_error"></p>
                        </div>
                        <div class="alert alert-success"  id="succ" >
                           <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                           <span class="sr-only">Correcto:</span>
                           <p id="mensaje_ok"></p>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="nombre">Nombre :</label>
                              <input type="text" class="form-control" id="nombre"
                                 name="nombre" title="Solo alfanumericos" placeholder="Ingresar Nombre" >
                           </div>
                           <div class="col-sm-6">
                              <label for="apellidos">Apellidos :</label>
                              <input type="text" class="form-control" id="apellidos"
                                 name="apellidos" title="Solo alfanumericos" placeholder="Ingresar Apellidos" >
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="correo">Correo :</label>
                           <input type="email" class="form-control" id="correo"
                              name="correo" title="Formato correo" placeholder="Ingresar Correo" >
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="dir">Dirección :</label>
                              <input type="text" class="form-control" id="dir"
                                 name="dir" title="Solo alfanumericos" placeholder="Ingresar Direccion" >
                           </div>
                           <div class="col-sm-6">
                              <label for="tel">Celular :</label>
                              <input type="text" class="form-control" id="tel"
                                 name="tel" title="Solo digitos" placeholder="Ingresar Celular">
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="fecha">Fecha Nacimiento :</label>
                              <input type="date" class="form-control" id="fecha"
                                 name="fecha" title="Formato Fecha" placeholder="Ingresar Fecha Nacimiento" >
                           </div>
                           <div class="col-sm-6">
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
                           </select>
                        </div>
                        <div class="form-group">
                           <!--<label for="cat">categoria :</label>-->
                           <input type="hidden" class="form-control" id="cat" value="2" 
                              name="cat" title="Solo digitos" placeholder="Ingresar Categoria">
                        </div>
                        <button type="submit" class="btn btn-dark form-control">REGISTRAR</button>
                        <?= form_close(); ?>              
                        <hr>
                        <div class="text-center">
                           <a class="small" href="<?php echo base_url();?>/Login/index">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
                        </div>
                        <div class="text-center">
                           <a class="small" href="<?php echo base_url();?>/Portada/index">Regresar a la portada</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
   </body>
</html>