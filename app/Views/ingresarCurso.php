<script src="<?= base_url()?>/resources/js/jsIngresarCurso.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4"><!--Inzq  -->

        <div class="card">
         <div class="card-header">
          <h3 class="card-title">REGISTRAR DE CURSOS</h3>
        </div>
        
        <div class="card-body">

          <div class="alert alert-danger"  id="error2" >
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <p id="mensaje_error"></p>
          </div>        
          <div class="alert alert-success"  id="succ2" >
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
            <span class="sr-only">Correcto:</span>
            <p id="mensaje_ok"></p>
          </div>  

          <?php $validation = \Config\Services::validation(); ?>

          <?= form_open_multipart('#', array('id' => 'frmreg2','name' => 'frmreg2')) ?>
          

          <div class="form-group ">
            <label for="nombre2">Nombre del Curso :</label>
            <input type="text" class="form-control" id="nombre2"
            name="nombre2" title="Solo alfanumericos" placeholder="Ingresar Nombre del Curso" >
          </div>
          <div class="form-group">
            <label for="foto">Foto:</label>
            <div class="custom-file">
             <input type="file" class="custom-file-input" id="foto" lang="es" name="foto" required>
             <label class="custom-file-label" for="foto">Seleccionar Archivo</label>
           </div>
         </div>  

         <div class="form-group">
          <label for="botoncurso">Boton Curso :</label>
          <input type="text" class="form-control" id="botoncurso"
          name="botoncurso" placeholder="Ingresar Nombre del boton curso">
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion:</label>
          <input type="text" class="form-control" id="descripcion"
          name="descripcion" placeholder="Ingresar Nombre del boton curso">
        </div>

        <div class="form-group">
          <!--<label for="fecha">Fecha:</label>-->
          <input type="hidden" class="form-control" id="fecha2"
          name="fecha2" placeholder="Ingresar Nombre del boton curso">
        </div>
        
        <div class="form-group">

          <label for="categoriac">Categoria Curso:</label>
          <?php 
          echo form_dropdown('categoriac', $combocategoria,'#', 'class=" selectpicker form-control" id="categoriac" data-live-search="true" required title="Seleccionar categoria"');                  
          ?>                      
        </div>
        <div>
         <button type="submit" class="btn btn-primary">Crear</button>                         
         <button type="button" id="cerrarreg" class="btn btn-default">Cerrar</button>
         <?= form_close(); ?>   

         
       </div>
       
     </div>
     
   </div>


 </div>

 <div class="col-md-8">
  <h3 class="card-title">Listado</h3>
  <button class="btn btn-primary" id="btn_mostrar2">
    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>                 
  Mostrar</button>   
  <div id="reporte" class="row">   
   
  </div> 


</div>




</div>


</div>
</div>
</section>  