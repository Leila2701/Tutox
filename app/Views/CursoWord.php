<script src="<?= base_url()?>/resources/js/jsWord.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    listarcomentario();
  });
</script>



          <div>
            <img src="<?php echo base_url();?>/resources/img/word-titulo.jpg" class="d-block w-100" alt="..." style="width: 100%">
          </div>
          <div id="reporte2">                   
          </div>


          <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#examen" data-whatever="@mdo">Dar Examen</button>


          <div class="modal fade" id="examen" tabindex="-1" aria-labelledby="examen" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Advertencia sobre el examen</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Debe haber visto todos los videos antes</p>

                </div>
                <div class="modal-footer">
                  <div class="col-md-6">
                    <p class="text-xl-center"><a class="btn btn-lg btn-success" target="_blank" href="<?php echo base_url();?>/Portada/WordExamen"role="button">Dar Examen</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <br>
          <h2>Comentarios</h2>
          <hr size="3">
          <div id="reporte" class="scroll" style=" height:200px; overflow-y: scroll;">   
           
          </div>



          <hr size="3">

          <div class="card-body">

           
           <?php $validation = \Config\Services::validation(); ?>

           <?= form_open('#', array('id' => 'frmreg2','name' => 'frmreg2')) ?>
            
           <div class="form-row">
                            <div class="form-group col-md-6">
                              <?php 
                                  $session = \Config\Services::session(); 
                                  if($session->has('nombre')){
                                ?> 
                              
                              <input type="hidden" class="form-control" id="idpersona" value="<?php echo $session->get('email');?> " 
                              name="idpersona" title="Solo digitos" placeholder="Ingresar IdPersona">
                            </div>
                                              
                            </div>       
                            <div class="form-group">
                              <label for="comentario">Comentario:</label>
                              <textarea name="comentario" id="comentario" class="form-control" 
                              placeholder="Ingresar comentario" required
                              rows="3"
                              ></textarea>                      
                            <div class="form-group col-md-6">
                              <!--<label for="idPer">IdPersona :</label>-->
                              <input type="hidden" class="form-control" id="idCur" value="1 " 
                              name="idCur" title="Solo digitos" placeholder="Ingresar IdCurso">
                            </div>
                              <?php }?>
                            <div class="form-group col-md-6">
                              <!--<label for="fecha">Fecha Nacimiento :</label>-->
                              <input type="hidden" class="form-control" id="fecha"
                              name="fecha" title="Formato Fecha" placeholder="Ingresar Fecha Nacimiento" >
                            </div>
                            
                            
                            <div>
                             <button type="submit" id="btn_mostrar" class="btn btn-primary">Agregar</button>                         
                             
                             
                           </div>
                           <?= form_close(); ?>  
                           
                         </div>
                      </div>
                         

            

