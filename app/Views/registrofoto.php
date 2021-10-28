<script src="<?= base_url()?>/resources/js/jsPersona.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction2();
  });
</script>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12"><!--Inzq  -->

        <div class="card">
         <div class="card-header">
          <h3 class="card-title">REGISTRAR DE CURSOS</h3>
        </div>
        
        <div class="card-body">

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
     
   </div>


 </div>




</div>


</div>
</div>
</section>  