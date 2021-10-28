<script src="<?= base_url()?>/resources/js/jsIngresarTema.js"></script>
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
          <h3 class="card-title">REGISTRAR TEMAS</h3>
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
          
          <div class="form-group">
            <label for="capitulo">Numero del Capitulo :</label>
            <input type="text" class="form-control" id="capitulo"
            name="capitulo" title="Solo digitos" placeholder="Ingresar Numero del Capitulo">
          </div>
          <div class="form-group ">
            <label for="nombre2">Nombre del Tema:</label>
            <input type="text" class="form-control" id="nombre2"
            name="nombre2" title="Solo alfanumericos" placeholder="Ingresar Nombre del Tema" >
          </div>
          <div class="form-group ">
            <label for="url">URL del video:</label>
            <input type="text" class="form-control" id="url"
            name="url" title="Solo alfanumericos" placeholder="Ingresar el URL del video" >
          </div>

          <div class="form-group">
            <label for="duracion">Duracion del video :</label>
            <input type="text" class="form-control" id="duracion"
            name="duracion" placeholder="Ingresar la duracion del video">
          </div>
          
          <div class="form-group">

            <label for="curso">Curso: </label>
            <?php 
            echo form_dropdown('curso', $combocurso,'#', 'class=" selectpicker form-control" id="curso" data-live-search="true" required title="Seleccionar curso"');                  
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