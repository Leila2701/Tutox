 
 <link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">
 <link href="<?php echo base_url();?>/resources/css/modificarcontraseña.css" rel="stylesheet">
 <script src ="<?=base_url()?>/resources/js/jsLogin.js"> </script>
    <script> 
      ruta='<?= base_url ()?>';
      $(document).ready(function(){doaction2();
      });
    </script>
                
<br>

  <div class="grid">

    <div  id="login">

      <h2 style="background: #2CB4BC"><span class="fontawesome-lock text-center" ></span>Modificar Contraseña</h2>

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
            <fieldset>
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
                    <input type="password" class="form-control form-control-user"
                     id="pass3" placeholder="Confirmar Nueva Contraseña" name="pass3">
                </div>
                                               
                <button type="submit" class="btn btn-dark form-control">MODIFICAR</button>
            </fieldset>                                   
        <?= form_close(); ?>   
      

    </div> <!-- end login -->

  </div>

               