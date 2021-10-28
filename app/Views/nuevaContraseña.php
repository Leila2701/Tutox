<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
<title>Tutox - Restaurar Contraseña</title>
<link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
<script src ="<?=base_url()?>/resources/js/jsLogin.js"> </script>
<script> 
   ruta='<?= base_url ()?>';
   $(document).ready(function(){doaction3();
   });
</script>
<body class="bg-gradient-primary" style="background-image: radial-gradient(circle, #ffffff, #f0f2f9, #dde7f2, #c6dde9, #aed3dc);">
   <div id="layoutSidenav_content">
      <main>
         <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7">
               <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="p-5">
                              <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">Restaurar Contraseña</h1>
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
                              <?php $validation2 = \Config\Services::validation(); ?>
                              <?= form_open('#', array('id' => 'frmreg','name' => 'frmreg')) ?>
                              <div class="form-group">
                                 <input type="email" class="form-control form-control-user"
                                    id="exampleInputEmail" aria-describedby="emailHelp" name="user"
                                    placeholder="Ingrese Email">
                              </div>
                              <button type="submit" class="btn btn-primary form-control">ENVIAR</button>
                              <?= form_close(); ?>   
                              <div class="text-center">
                                 <a class="small" href="<?php echo base_url();?>/Login/index">Regresar a login</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </div>
   <footer >
      <div class="footer-copyright text-center py-3">
         <a href="<?php echo base_url();?>/Portada/index">Tutox</a> | 
         <a href="<?php echo base_url();?>/Portada/somos">Informacion Compañia</a> | <a href="<?php echo base_url();?>/Portada/terminos">Téminos y Condiciones</a> 
      </div>
   </footer>
</body>