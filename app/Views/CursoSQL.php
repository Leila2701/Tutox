<script src="<?= base_url()?>/resources/js/jsWord.js"></script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    doaction();
  });
</script>

<div>
  <img src="<?php echo base_url();?>/resources/img/sql-titulo.jpg" class="d-block w-100" alt="..." style="width: 100%">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bW-NYf606fM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/bW-NYf606fM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>

            </div>
          </div>
        </div>
      <th scope="row">0</th>
      <td>Introducción</td>
      <td>4:45</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal2">
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Instalar SQL server</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/udpvZv_C7js" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/udpvZv_C7js" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">1</th>
      <td>Instalar SQL server</td>
      <td>5:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal3">
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CREACION Y ELIMINACION DE UNA BD</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HEkfvk2PBCs" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/HEkfvk2PBCs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">2</th>
      <td>CREACION Y ELIMINACION DE UNA BD</td>
      <td>3:01</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal4">
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">TIPOS DE DATOS</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7gh5MtqkIiU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/7gh5MtqkIiU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">3</th>
      <td>TIPOS DE DATOS</td>
      <td>2:48</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal5">
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Creación y eliminación de tablas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UblULDVT2Fs" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/UblULDVT2Fs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">4</th>
      <td>Creación y eliminación de tablas</td>
      <td>4:26</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal6">
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Inserción de datos (INSERT)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FlkFuNc9psM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/FlkFuNc9psM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">5</th>
      <td>Inserción de datos (INSERT)</td>
      <td>5:19</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal7">
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CONSULTAS</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IDljsF3AT2Q" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/IDljsF3AT2Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">6</th>
      <td>CONSULTAS</td>
      <td>2:53</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal8">
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">WHERE</h5>
              <!--<button type="button" class="close" data-dis3i5s="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W0n64vnpPwc" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/W0n64vnpPwc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">7</th>
      <td>WHERE</td>
      <td>3:53</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal9">
       <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Operadores Relacionales</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d36BhUrhPt4" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/d36BhUrhPt4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">8</th>
      <td>Operadores Relacionales</td>
      <td>3:47</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal10">
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Elimininación de registros (DELETE, DROP, TRUNCATE)</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l9Ijy1g5Doc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/l9Ijy1g5Doc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">9</th>
      <td>Elimininación de registros (DELETE, DROP, TRUNCATE)</td>
      <td>7:17</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal11">
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">UPDATE</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MCak5PcSswo" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/MCak5PcSswo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">10</th>
      <td>UPDATE</td>
      <td>4:02</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal12">
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">identity parte 1</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7xMtbeLf-DA" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/7xMtbeLf-DA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">11</th>
      <td>identity parte 1</td>
      <td>07:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal13">
      <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Identity parte 2</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pLE663Cg5-Y" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/pLE663Cg5-Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">12</th>
      <td> Identity parte 2</td>
      <td>14:55</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal14">
      <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Operadores aritmeticos</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W3LBpUyTJ9Y" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/W3LBpUyTJ9Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div><iframe width="560" height="315" src="https://www.youtube.com/embed/_0OyBCLq-kM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">13</th>
      <td>Operadores aritmeticos</td>
      <td>8:01</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal15">
      <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Funciones de Agregado</h5>
              <!--<button type="button" class="close" data-dismiss="moda9 0ria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iAcv1jxEuGs" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/iAcv1jxEuGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">14</th>
      <td>Funciones de Agregado</td>
      <td>9:02</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal16">
      <div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Concatenacion & Alias</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sjZJhj7xSaw" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/sjZJhj7xSaw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">16</th>
      <td>Concatenacion & Alias</td>
      <td>5:52</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal17">
      <div class="modal fade" id="exampleModal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Funciones de manejo de cadenas parte 1</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/plJ5eZOiBTY" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/plJ5eZOiBTY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">17</th>
      <td>Funciones de manejo de cadenas parte 1</td>
      <td>7:08</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal18">
      <div class="modal fade" id="exampleModal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Funciones de manejo de cadenas parte 2</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_ajYVqI6XzQ" id="iframeVideo"></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/_ajYVqI6XzQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">18</th>
      <td>Funciones de manejo de cadenas parte 2</td>
      <td>8:42</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal19">
      <div class="modal fade" id="exampleModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Order by</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FZe2BT3GFF8" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/FZe2BT3GFF8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">19</th>
      <td>Order by</td>
      <td>5:16</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal20">
      <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Operadores lógicos nor and or</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/brBIaGk5X_A" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/brBIaGk5X_A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">20</th>
      <td>OrderOperadores lógicos nor and or</td>
      <td>10:27</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal21">
      <div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Is null - between</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Po0d7ediuic" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Po0d7ediuic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">21</th>
      <td>Is null - between</td>
      <td>6:11</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal22">
      <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Like not like</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B2lVZOuj4ME" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/B2lVZOuj4ME" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">22</th>
      <td>Like not like</td>
      <td>9:58</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal23">
      <div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Count</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fTXiRZV8Imk" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/fTXiRZV8Imk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">23</th>
      <td>Count</td>
      <td>6:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal24">
      <div class="modal fade" id="exampleModal24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sum - Avg</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U4538uTXx9w" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/U4538uTXx9w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">24</th>
      <td>Sum - Avg</td>
      <td>8:01</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal25">
      <div class="modal fade" id="exampleModal25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Min - Max</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lSQTzhMzdkQ" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/lSQTzhMzdkQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">25</th>
      <td>Min - Max</td>
      <td>7:37</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal26">
      <div class="modal fade" id="exampleModal26" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Having</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RPiJk40Nubw" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/RPiJk40Nubw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">26</th>
      <td>Having</td>
      <td>7:77</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal27">
      <div class="modal fade" id="exampleModal27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Compute</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FYfbiUK_anA" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/FYfbiUK_anA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">27</th>
      <td>Compute</td>
      <td>6:09</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal28">
      <div class="modal fade" id="exampleModal27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Distinct</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nfYShbs1v_M" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">28</th>
      <td>Distinct</td>
      <td>7:35</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal29">
      <div class="modal fade" id="exampleModal29" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Top</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kcluqgjiSxQ" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/kcluqgjiSxQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">29</th>
      <td>Top</td>
      <td>3:57</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal30">
      <div class="modal fade" id="exampleModal30" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Respaldo y Restauracion de Bases de Datos</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ve6dGwYycHc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/ve6dGwYycHc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">30</th>
      <td>Respaldo y Restauracion de Bases de Datos</td>
      <td>8:06</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal31">
      <div class="modal fade" id="exampleModal31" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Join</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NL7eBil5Yak" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/NL7eBil5Yak" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">31</th>
      <td>Join</td>
      <td>3:51</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal32">
      <div class="modal fade" id="exampleModal32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Inner Join</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mjE1PWXm8QA"  id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/mjE1PWXm8QA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">32</th>
      <td>Inner Join</td>
      <td>8:21</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal33">
      <div class="modal fade" id="exampleModal33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Join Left</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pjduEQj9-6c"  id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/pjduEQj9-6c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">33</th>
      <td>Join Left</td>
      <td>5:20</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal34">
      <div class="modal fade" id="exampleModal34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Right Join</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fsO2mjTNzVM"  id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/fsO2mjTNzVM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">34</th>
      <td>Right Join</td>
      <td>5:20</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal35">
      <div class="modal fade" id="exampleModal35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Join and Group by</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ySm_OLlXW1s"  id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/ySm_OLlXW1s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">35</th>
      <td>Join and Group by</td>
      <td>3:42</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal36">
      <div class="modal fade" id="exampleModal36" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Join and Update and Delete</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nXmsP-YKnfo"  id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/nXmsP-YKnfo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">36</th>
      <td>Join and Update and Delete</td>
      <td>3:21</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal37">
      <div class="modal fade" id="exampleModal37" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alter Table</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/66-bp845khc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/66-bp845khc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">37</th>
      <td>Alter Table</td>
      <td>2:28</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal38">
      <div class="modal fade" id="exampleModal38" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Campos calculados</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IY3_VP45XHk" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/IY3_VP45XHk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">38</th>
      <td>Campos calculados</td>
      <td>3:02</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal39">
      <div class="modal fade" id="exampleModal39" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Subconsultas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/olQp_75IVAc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/olQp_75IVAc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">38</th>
      <td>Subconsultas</td>
      <td>2:40</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal40">
      <div class="modal fade" id="exampleModal40" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Subconsultas con in & not in</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yAZuBYJCwio" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/yAZuBYJCwio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">40</th>
      <td>Subconsultas con in & not in</td>
      <td>5:25</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal41">
      <div class="modal fade" id="exampleModal41" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Subconsultas con any & all</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yLv1wPpWEGc" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/yLv1wPpWEGc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">41</th>
      <td>Subconsultas con any & all</td>
      <td>6:15</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal42">
      <div class="modal fade" id="exampleModal42" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Subconsultas Update & Delate</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_VwTwrVfXc0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/_VwTwrVfXc0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">42</th>
      <td>Subconsultas Update & Delate</td>
      <td>5:23</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal43">
      <div class="modal fade" id="exampleModal43" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Subconsultas con insert</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IXmsQsvMJJs" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/IXmsQsvMJJs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">43</th>
      <td>Subconsultas con insert</td>
      <td>2:44</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal44">
      <div class="modal fade" id="exampleModal44" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Comando GO</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EzIxFj16m54" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/EzIxFj16m54" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">44</th>
      <td>Comando GO</td>
      <td>2:05</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal45">
      <div class="modal fade" id="exampleModal45" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vistas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ppxv02m-yBQ" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Ppxv02m-yBQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">45</th>
      <td>Vistas</td>
      <td>4:32</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal46">
      <div class="modal fade" id="exampleModal46" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vistas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R4C-VZ5ZT0w" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/R4C-VZ5ZT0w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">46</th>
      <td>Vistas</td>
      <td>3:37</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal47">
      <div class="modal fade" id="exampleModal47" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Vistas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YAqscPnzrKM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/YAqscPnzrKM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">47</th>
      <td>Eliminar Vistas</td>
      <td>2:54</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal48">
      <div class="modal fade" id="exampleModal48" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update & Delate con Vistas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Sq1O1BwSn1g" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Sq1O1BwSn1g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">48</th>
      <td>Update & Delate con Vistas</td>
      <td>2:54</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal49">
      <div class="modal fade" id="exampleModal49" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sentencia Witch Check Option en Vistas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qg4Clxz5LE0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/qg4Clxz5LE0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">49</th>
      <td>Sentencia Witch Check Option en Vistas</td>
      <td>4:04</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal50">
      <div class="modal fade" id="exampleModal50" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Presentamos la Continuación del Curso</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wDnxBabypbA" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/wDnxBabypbA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">50</th>
      <td>Presentamos la Continuación del Curso</td>
      <td>5:04</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal51">
      <div class="modal fade" id="exampleModal51" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vistas Modificadas</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mDJ-uEXEtR4" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/mDJ-uEXEtR4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">51</th>
      <td>Vistas Modificadas</td>
      <td>3:00</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal52">
      <div class="modal fade" id="exampleModal52" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lenguaje de Control de Flujo [CASE]</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/anaEKG-1-_A" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/anaEKG-1-_A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">52</th>
      <td>Lenguaje de Control de Flujo [CASE]</td>
      <td>5:57</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal53">
      <div class="modal fade" id="exampleModal53" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lenguaje de Control de Flujo [IF]</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JZIEevYaY0s" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/JZIEevYaY0s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">53</th>
      <td>Lenguaje de Control de Flujo [IF]</td>
      <td>4:29</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal54">
      <div class="modal fade" id="exampleModal54" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Variables</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HuND7jGWJQ4" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/HuND7jGWJQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">54</th>
      <td>Variables</td>
      <td>6:16</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal55">
      <div class="modal fade" id="exampleModal55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nx3y3VAEFjU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/nx3y3VAEFjU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">55</th>
      <td>Procedimientos Almacenados</td>
      <td>9:24</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal56">
      <div class="modal fade" id="exampleModal56" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Creacion y Ejecucion</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nx3y3VAEFjU" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/nx3y3VAEFjU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">56</th>
      <td>Procedimientos Almacenados Creacion y Ejecucion</td>
      <td>7:41</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal57">
      <div class="modal fade" id="exampleModal57" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Eliminación</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/Ey3fOvvzeJ0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Ey3fOvvzeJ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">57</th>
      <td>Procedimientos Almacenados Eliminación</td>
      <td>3:41</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal58">
      <div class="modal fade" id="exampleModal58" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Parametros Entrada</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/RpkbICe0QqM" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/RpkbICe0QqM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">58</th>
      <td>Procedimientos Almacenados Parametros Entrada</td>
      <td>4:41</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal59">
      <div class="modal fade" id="exampleModal59" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Parametros Salida</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/prTs_Diz6xk" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/prTs_Diz6xk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">59</th>
      <td>Procedimientos Almacenados Parametros Salida</td>
      <td>6:00</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal60">
      <div class="modal fade" id="exampleModal60" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados-Return</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3C1IBCC_l0k" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/3C1IBCC_l0k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">60</th>
      <td>Procedimientos Almacenados-Return</td>
      <td>4:00</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal61">
      <div class="modal fade" id="exampleModal61" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Info</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7qOdCjqJuH0" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/7qOdCjqJuH0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">61</th>
      <td>Procedimientos Almacenados Info</td>
      <td>5:14</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal62">
      <div class="modal fade" id="exampleModal62" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Encrypt</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fNDlfQQ1oJk" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/fNDlfQQ1oJk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">62</th>
      <td>Procedimientos Almacenados Encrypt</td>
      <td>5:14</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal63">
      <div class="modal fade" id="exampleModal63" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Procedimientos Almacenados Anidación</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IQyKfS5FU6w" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/IQyKfS5FU6w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">63</th>
      <td>Procedimientos Almacenados Anidación</td>
      <td>5:48</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal64">
      <div class="modal fade" id="exampleModal64" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Triggers</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IQyKfS5FU6w" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/VNtmaJ2rJ3M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">64</th>
      <td>Triggers</td>
      <td>5:07</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal65">
      <div class="modal fade" id="exampleModal65" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Triggers Insert</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IQyKfS5FU6w" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/htvovP5AaTc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">65</th>
      <td>Triggers Insert</td>
      <td>4:38</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal66">
      <div class="modal fade" id="exampleModal66" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Triggers Update</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FUFiHvMpFsY" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/FUFiHvMpFsY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">66</th>
      <td>Triggers Update</td>
      <td>1:56</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal67">
      <div class="modal fade" id="exampleModal67" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Triggers Delete</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o8N5jUCq_C8" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/o8N5jUCq_C8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">67</th>
      <td>Triggers Delete</td>
      <td>3:56</td>
    </tr>
    <tr data-toggle="modal" data-target="#exampleModal68">
      <div class="modal fade" id="exampleModal68" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Triggers Habilitar - Deshabilitar</h5>
              <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
            </div>
            <div class="modal-body">                    
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kxgsBHMjSgE" id="iframeVideo"></iframe>
                        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/kxgsBHMjSgE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    </div>
            </div>
            <div class="modal-footer">
              <a class="btn btn-info btn-block"  href="<?php echo base_url();?>/Portada/CursoSQL">Close</a>
            </div>
          </div>
        </div>
      <th scope="row">68</th>
      <td>Triggers Habilitar - Deshabilitar</td>
      <td>3:23</td>
    </tr>
<!--falta 38-->
    
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
