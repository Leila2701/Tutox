<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
 <title>Tutox - Modificar Contraseña</title>  
  <link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>


<script src ="<?=base_url()?>/resources/js/jsLogin.js"> </script>
   <script> 
     ruta='<?= base_url ()?>';
     $(document).ready(function(){doaction4();
     });
   </script>

               <div class="row justify-content-center">

                   <div class="col-xl-6 col-lg-6 col-md-7">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                       <div class="card-body p-0">
                       <!-- Nested Row within Card Body -->
                           <div class="row">
                         
                               <div class="col-lg-12">
                                   <div class="p-5">
                                       <div class="text-center">
                                           <h1 class="h4 text-gray-900 mb-4">Modificar Contraseña</h1>
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
                               
                                       <?php $validation = \Config\Services::validation(); ?>

                  
                                       <?= form_open('#', array('id' => 'frmreg','name' => 'frmreg')) ?>
                                           <div class="form-group">
                                               <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="user"
                                                 placeholder="Ingrese Email">
                                           </div>
                                           <div class="form-group">
                                               <input type="password" class="form-control form-control-user"
                                                id="pass" placeholder="Contraseña Actual" name="pass">
                                           </div>
                                           <div class="form-group">
                                               <input type="password" class="form-control form-control-user"
                                                id="pass2" placeholder="Nueva Contraseña" name="pass2">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control form-control-user"
                                                id="token" placeholder="Digite Clave Token" name="token">
                                           </div>
                                              
                                           <button type="submit" class="btn btn-dark form-control">REGISTRAR</button>

                                               
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


               
   </body>
</html>
                      
              