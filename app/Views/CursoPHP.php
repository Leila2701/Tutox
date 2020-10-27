 <script src="<?= base_url()?>/resources/js/jsWord.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>

<div>
  <img src="<?php echo base_url();?>/resources/img/php-titulo.jpg" class="d-block w-100" alt="..." style="width: 100%">
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
              <h5 class="modal-title" id="exampleModalLabel">Introducción</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body" id="ctn-cover-video">                    
                    <div class="embed-responsive embed-responsive-21by9" id="ctn-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Q21XLsP2bsY" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Q21XLsP2bsY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>

            </div>
          </div>
        </div>
      <th scope="row">0</th>
      <td>Introducción</td>
      <td>6:59</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal2">
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Variablesr</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/loodw03MtPU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/loodw03MtPU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">1</th>
      <td>Crear Variables</td>
      <td>7:01</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal3">
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Función IF - ELSE</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Rl1Eth_jqto" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Rl1Eth_jqto" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">2</th>
      <td>Función IF - ELSE</td>
      <td>7:16</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal4">
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ciclo FOR</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RyM39rIIvwY" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/RyM39rIIvwY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">3</th>
      <td>Ciclo FOR</td>
      <td>7:44</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal5">
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enviar y Recibir datos con GET y POST</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oP8AUuV-6PM" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/oP8AUuV-6PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">4</th>
      <td>Enviar y Recibir datos con GET y POST</td>
      <td>12:36</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal6">
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Switch Case y POST en la misma Pagina</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yOX8_xtFWd4" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/yOX8_xtFWd4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">5</th>
      <td>Switch Case y POST en la misma Pagina</td>
      <td>16:50</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal7">
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Funciones en PHP</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2HBb_Ar_VDg" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/2HBb_Ar_VDg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">6</th>
      <td>Funciones en PHP</td>
      <td>12:39</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal8">
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Insertar datos en base de datos (MySQLi)</h5>
              <!--<button type="button" class="close" data-dis3i5s="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OsWBMmbPEig" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/OsWBMmbPEig" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">7</th>
      <td>Insertar datos en base de datos (MySQLi)</td>
      <td>17:37</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal9">
       <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Consultar Datos en MYSQL con PHP (MySQLi)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i1x8z5K3xpE" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/i1x8z5K3xpE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">8</th>
      <td>Consultar Datos en MYSQL con PHP (MySQLi)</td>
      <td>14:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal10">
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Variables Globales e Iniciar sesión (Login)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label14"43ose">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NRB7Eppn8kc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/NRB7Eppn8kc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">9</th>
      <td>Variables Globales e Iniciar sesión (Login)</td>
      <td>14:43</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal11">
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Consultar, Insertar, Actualizar y Eliminar en MYSQL</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hXgmuKgNkb0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/hXgmuKgNkb0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">10</th>
      <td>Consultar, Insertar, Actualizar y Eliminar en MYSQL</td>
      <td>21:09</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal12">
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sublime Text + FTP, Editar página subida a internet</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7xMtbeLf-DA" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/0J4C_zVEacw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">11</th>
      <td>Sublime Text + FTP, Editar página subida a internet</td>
      <td>6:36</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal13">
      <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajax - Ejemplo básico y consultar datos a MySQL sin recargar página</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pLE663Cg5-Y" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/_0iZ3W2u_Bo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">12</th>
      <td>Ajax - Ejemplo básico y consultar datos a MySQL sin recargar página</td>
      <td>17:40</td>
    </tr>
    
   
<!---->
    
  </tbody>
</table>
<br>
<h2>1 comentario</h2>
<hr size="3">
  <div id="reporte" >   
                 
  </div>
<hr size="3">


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Ingresar Comentario</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribir su comentario"></textarea>
  </div>
   <button class="btn btn-primary" id="btn_mostrar" >Agregar</button>
   <button class="btn btn-primary" type="submit">Cancelar</button>

   

<br>
<br>


 
   <!-- <script type="text/javascript">
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
