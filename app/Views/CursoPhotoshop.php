 <script src="<?= base_url()?>/resources/js/jsWord.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>

<div>
  <img src="<?php echo base_url();?>/resources/img/photoshop-titulo.jpg" class="d-block w-100" alt="..." style="width: 100%">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4-VMuLs99Ss" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/4-VMuLs99Ss" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>

            </div>
          </div>
        </div>
      <th scope="row">0</th>
      <td>Introducción</td>
      <td>11:42</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal2">
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tapon de Clonar y Parche</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y9yKFzACEHg" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Y9yKFzACEHg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">1</th>
      <td>Tapon de Clonar y Parche</td>
      <td>14:23</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal3">
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lazos y Tono/Saturación</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HVBg6Fn2Rc0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/HVBg6Fn2Rc0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">2</th>
      <td>Lazos y Tono/Saturación</td>
      <td>21:46</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal4">
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pincel y Manejo de Capas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sAbERrDojDg" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/sAbERrDojDg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">3</th>
      <td>Pincel y Manejo de Capas</td>
      <td>11:32</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal5">
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Aumentar Cola y Senos (Licuar)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/us1lxLrI3T8" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/us1lxLrI3T8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">4</th>
      <td>Aumentar Cola y Senos (Licuar)</td>
      <td>12:56</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal6">
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Firmamento con Estrellas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-YyNVv4n99E" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/-YyNVv4n99E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">5</th>
      <td>Firmamento con Estrellas</td>
      <td>12:25</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal7">
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Efecto Baboso</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cuovazDv9Vs" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/cuovazDv9Vs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">6</th>
      <td>Funciones en PHP</td>
      <td>5:44</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal8">
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Efecto Eclipse</h5>
              <!--<button type="button" class="close" data-dis3i5s="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3fMU7zlNmM8" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/3fMU7zlNmM8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">7</th>
      <td>Efecto Eclipse</td>
      <td>7:42</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal9">
       <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lazo Magnetico y Poligonal</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8xgfhw1VDxc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/8xgfhw1VDxc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">8</th>
      <td>Lazo Magnetico y Poligonal</td>
      <td>14:42</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal10">
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Perfeccionar Borde</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label14"43ose">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5ZFcOZdXEcU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/5ZFcOZdXEcU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">9</th>
      <td>Perfeccionar Borde</td>
      <td>10:21</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal11">
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar imagenes al mismo tiempo (automatizar)  </h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B3QWy0q2CI8" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/B3QWy0q2CI8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">10</th>
      <td>Editar imagenes al mismo tiempo (automatizar) </td>
      <td>6:48</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal12">
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Descargar y Modificar MockUps</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TgOawoDO_jc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/TgOawoDO_jc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block" href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">11</th>
      <td>Descargar y Modificar MockUps</td>
      <td>6:33</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal13">
      <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Herramienta Pluma</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pLE663Cg5-Y" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/GzQBJVi1_9E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoPHP">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">12</th>
      <td>Herramienta Pluma</td>
      <td>12:31</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal14">
      <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Herramienta Pincel</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JM_uHY9vg3Q" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/JM_uHY9vg3Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div><iframe width="560" height="315" src="https://www.youtube.com/embed/_0OyBCLq-kM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">13</th>
      <td>Herramienta Pincel</td>
      <td>13:57</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal15">
      <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tipos de Máscaras</h5>
              <!--<button type="button" class="close" data-dismiss="moda9 0ria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0-kqpGMPiHM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/0-kqpGMPiHM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">14</th>
      <td>Tipos de Máscaras</td>
      <td>18:50</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal16">
      <div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Estilos Automáticos</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3nHpY91TjSM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/3nHpY91TjSM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">16</th>
      <td>Estilos Automáticos</td>
      <td>7:04</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal17">
      <div class="modal fade" id="exampleModal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">17</th>
      <td>Que es RGB - CMYK y cuando usarlos</td>
      <td>5:01</td>
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
