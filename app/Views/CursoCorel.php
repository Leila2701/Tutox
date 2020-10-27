 <script src="<?= base_url()?>/resources/js/jsWord.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>

<div>
  <img src="<?php echo base_url();?>/resources/img/corel-titulo.jpg" class="d-block w-100" alt="..." style="width: 100%">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6uHRKhSa6Cw" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/6uHRKhSa6Cw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>

            </div>
          </div>
        </div>
      <th scope="row">0</th>
      <td>Introducción</td>
      <td>13:30</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal2">
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Que es RGB - CMYK y cuando usarlos</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Rd6HYvVgSXA" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Rd6HYvVgSXA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">1</th>
      <td>Que es RGB - CMYK y cuando usarlos</td>
      <td>5:01</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal3">
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Círculos y Contornos</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jTUGHG7gTyc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/jTUGHG7gTyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">2</th>
      <td>Círculos y Contornos</td>
      <td>16:07</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal4">
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">>Herramientas Bezier y Forma (Pluma)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rQ9Oey5zjmM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/rQ9Oey5zjmM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">3</th>
      <td>Herramientas Bezier y Forma (Pluma)</td>
      <td>15:22</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal5">
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Soldar, Recortar e Intersección</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/by09mpXB5zY" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/by09mpXB5zY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">4</th>
      <td>Soldar, Recortar e Intersección</td>
      <td>13:27</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal6">
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Transparencias y Degradados</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c-FRaP12jHk" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/c-FRaP12jHk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">5</th>
      <td>Transparencias y Degradados</td>
      <td>11:07</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal7">
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">PowerClip o Máscaras</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rkJT8jjPZo8" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/rkJT8jjPZo8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">6</th>
      <td>PowerClip o Máscaras</td>
      <td>9:39</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal8">
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rompecabezas (PowerClip)</h5>
              <!--<button type="button" class="close" data-dis3i5s="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tn2Yb94kKaM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/tn2Yb94kKaM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">7</th>
      <td>Rompecabezas (PowerClip)</td>
      <td>6:28</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal9">
       <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Fusión de Impresión</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r3rGkRrjnTU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/r3rGkRrjnTU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">8</th>
      <td>Fusión de Impresión</td>
      <td>7:07</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal10">
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vectorización Automática y por colores</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label14"43ose">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PBNMj8p-_po" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/PBNMj8p-_po" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">9</th>
      <td>Vectorización Automática y por colores</td>
      <td>13:51</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal11">
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Esquina Doblada en CorelDraw (1 Minuto)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nyKFITOpOaA" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/nyKFITOpOaA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">10</th>
      <td>Esquina Doblada en CorelDraw (1 Minuto)</td>
      <td>0:58</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal12">
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Como hacer fotos Polaroid (Instantáneas)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vAOm8eT3-AY" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/vAOm8eT3-AY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoCorel">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">11</th>
      <td>Como hacer fotos Polaroid (Instantáneas)</td>
      <td>6:01</td>
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
