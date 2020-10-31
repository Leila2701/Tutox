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
<table class="table table-hover table-dark">
  <thead>
    <tr >
      <th scope="col">N°</th>
      <th scope="col">Tema</th>
      <th scope="col">Duración</th>
    </tr>
  </thead>
  <tbody>
    <tr data-toggle="modal" data-target="#exampleModal1">
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Introducción para principiantes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pbvwCTld8BA" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">0</th>
      <td>Introducción para principiantes</td>
      <td>10:39</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal2">
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Carta Sencilla (Formal)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EdoQhbRWCbo" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">1</th>
      <td>Carta Sencilla (Formal)</td>
      <td>15:10</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal3">
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Viñetas, sangrías y tabulación de datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_WyWbh5wQDo" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">2</th>
      <td>Viñetas, sangrías y tabulación de datos</td>
      <td>12:39</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal4">
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Insertar imágenes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/furLE2g8jZc" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">3</th>
      <td>Insertar imágenes</td>
      <td>12:10</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal5">
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Insertar columnas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DB1CzpT4Qtg" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">4</th>
      <td>Insertar columnas</td>
      <td>07:25</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal6">
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tablas y sus estilos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Qngv4AOAjS0" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">5</th>
      <td>Tablas y sus estilos</td>
      <td>11:32</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal7">
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cuadros de textos y WordArt</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VPyAxNgCF3Y" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">6</th>
      <td>Cuadros de textos y WordArt</td>
      <td>08:04</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal8">
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Combinar correspondencia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B1vfwuQdqGo" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">7</th>
      <td>Combinar correspondencia</td>
      <td>20:02</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal9">
       <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enumerar pagina en "pie de página"</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2wNnB3SndW0" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">8</th>
      <td>Enumerar paginas en "pie de página"</td>
      <td>06:50</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal10">
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tablas de contenidos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g6zaadbD-0M" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">9</th>
      <td>Tablas de contenidos</td>
      <td>06:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal11">
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Función Rand y Lorem Ipsum</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vsDopFpEYPI" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">10</th>
      <td>Función Rand y Lorem Ipsum</td>
      <td>03:15</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal12">
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Mapas Conceptuales (SmartArt)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ff2OebYLm00" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">11</th>
      <td>Mapas conceptuales (SmartArt)</td>
      <td>09:09</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal13">
      <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Guardas paginas en documentos individuales (separar correspondencias)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7Tj-BoKLPTY" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">12</th>
      <td>Guardas paginas en documentos individuales (separar correspondencias)</td>
      <td>04:11</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal14">
      <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajustar valores  predeterminados</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dMG3pNq1_C4" id="iframeVideo"></iframe>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      <th scope="row">13</th>
      <td>Ajustar valores  predeterminados</td>
      <td>04:17</td>
    </tr>

  </tbody>
</table>
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
                      <!--<label for="idPer">IdPersona :</label>-->
                      <input type="hidden" class="form-control" id="idPer" value="5" 
                      name="idPer" title="Solo digitos" placeholder="Ingresar IdPersona">
                    </div>
                    <div class="form-group col-md-6">
                      <!--<label for="nombre">Nombre :</label>-->
                      <input type="hidden" class="form-control" id="nombre2" value="Angel" 
                      name="nombre2" title="Solo alfanumericos" placeholder="Ingresar Nombre" >
                    </div>
                  </div>       
                  <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea name="comentario" id="comentario" class="form-control" 
                    placeholder="Ingresar comentario" required
                    rows="3"
                    ></textarea>                      
                  </div>
                                   
                    
                    <div>
                     <button type="submit" id="btn_mostrar" class="btn btn-primary">Agregar</button>                         
                            <button type="button" id="cerrarreg" class="btn btn-default">Cerrar</button>
                       <?= form_close(); ?>      
                                    
                    </div>
                      
                  </div>
  
  <hr size="3">
   

<br>
<br>


 
    <script type="text/javascript">
      //Url del video a reproducir
      var videoSrc='https://www.youtube.com/embed/pbvwCTld8BA';

      //Al abrir la ventana modal, le agregué autoplay igual a 1, para que se reproduzca
      //automáticamente, en caso de que no se requiera la autoreproducción, se quita 
      //esa parte "?autoplay=1".
      $('#exampleModal1').on('show.bs.modal', function () {  
        var iframe=$('#iframeVideo');
        iframe.attr("src", videoSrc+"?autoplay=1");
      });

      //Al cerrar la ventana modal, solamente reasignamos el video al atributo del iframe
      //y eso ocasiona que se detenga la reproducción del archivo,
      //aunque también podríamos haber dejado el valor src en null. :)
      $('#exampleModal').on('hidden.bs.modal', function (e) {
        
        var iframe=$('#iframeVideo');
        iframe.attr("src", videoSrc);

      });
    </script>
