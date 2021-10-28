<script src="<?= base_url()?>/resources/js/jsPersona.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction2();
  });
</script>


 
 <div class="grid" style="margin-left: auto;
                          margin-right: auto;
                          max-width: 90%;
                          width: 1200px;">


              <div class="text-center">
                <h1 class=" text-gray-900 mb-4" style="color:#0B6470;font-weight: bold; size: 300px;">Mi Perfil</h1>
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

          <?= form_open_multipart('#', array('id' => 'frmreg2','name' => 'frmreg2')) ?>
          
          <?php 
            $session = \Config\Services::session(); 
            if($session->has('email'))
          ?> 

           <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="nombre">Nombre :</label>
                              <input type="text" class="form-control" id="nombre"
                                 name="nombre" title="Solo alfanumericos" placeholder="Ingresar Nombre" value="<?php echo $session->get('nombre'); ?>" >
                           </div>
                           <div class="col-sm-6">
                              <label for="apellidos">Apellidos :</label>
                              <input type="text" class="form-control" id="apellidos"
                                 name="apellidos" title="Solo alfanumericos" placeholder="Ingresar Apellidos" value="<?php echo $session->get('ape'); ?>">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="correo">Correo :</label>
                           <input type="text" class="form-control" id="correo"
                              name="correo" title="Formato correo" placeholder="Ingresar Correo" value="<?php echo $session->get('email'); ?>" disabled="disabled" >
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="dir">Dirección :</label>
                              <input type="text" class="form-control" id="dir"
                                 name="dir" title="Solo alfanumericos" placeholder="Ingresar Direccion" value="<?php echo $session->get('dire'); ?>">
                           </div>
                           <div class="col-sm-6">
                              <label for="tel">Celular :</label>
                              <input type="text" class="form-control" id="tel"
                                 name="tel" title="Solo digitos" placeholder="Ingresar Celular" value="<?php echo $session->get('tel'); ?>" >
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="fecha">Fecha Nacimiento :</label>
                              <input type="text" class="form-control" id="fecha"
                                 name="fecha" title="Formato Fecha" placeholder="Ingresar Fecha Nacimiento" value="<?php echo $session->get('fecha'); ?>" >
                           </div>
                            <div class="col-sm-6">
                              <label for="dni">DNI :</label>
                              <input type="text" class="form-control" id="dni"
                                 name="dni" title="Solo digitos" placeholder="Ingresar DNI" value="<?php echo $session->get('dni'); ?>" >
                           </div>

                        </div>

                        <div class="form-group">
                            <label for="foto">Foto:</label>
                            <div class="custom-file">
                             <input type="file" class="custom-file-input" id="foto" lang="es" name="foto" required>
                             <label class="custom-file-label" for="foto">Seleccionar Archivo</label>
                           </div>
                         </div>  
        <div>
         <button type="submit" class="btn btn-dark form-control">REGISTRAR</button>
         <?= form_close(); ?>   
       </div>
            </div>
    


