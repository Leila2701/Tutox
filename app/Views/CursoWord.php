  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div>WORD</div>
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
    <tr >
      <th scope="row">1</th>
      <td>Carta Sencilla</td>
      <td>15:10</td>
    </tr>
    <tr >
      <th scope="row">2</th>
      <td>Viñetas, sangrías y tabulación de datos</td>
      <td>12:39</td>
    </tr>
    <tr >
      <th scope="row">3</th>
      <td>Insertar imágenes</td>
      <td>12:10</td>
    </tr>
    <tr >
      <th scope="row">4</th>
      <td>Insertar columnas</td>
      <td>07:25</td>
    </tr>
    <tr >
      <th scope="row">5</th>
      <td>Tablas y sus estilos</td>
      <td>11:32</td>
    </tr>
    <tr >
      <th scope="row">6</th>
      <td>Cuadros de textos y WordArt</td>
      <td>08:04</td>
    </tr>
    <tr >
      <th scope="row">7</th>
      <td>Combinar correspondencia</td>
      <td>20:02</td>
    </tr>
    <tr >
      <th scope="row">8</th>
      <td>Enumerar paginas en "pie de página"</td>
      <td>06:50</td>
    </tr>
    <tr >
      <th scope="row">9</th>
      <td>Tablas de contenidos</td>
      <td>06:29</td>
    </tr>
    <tr >
      <th scope="row">10</th>
      <td>Función Rand y Lorem Ipsum</td>
      <td>03:15</td>
    </tr>
    <tr >
      <th scope="row">11</th>
      <td>Mapas conceptuales (SmartArt)</td>
      <td>09:09</td>
    </tr>
    <tr >
      <th scope="row">12</th>
      <td>Guardas paginas en documentos individuales (separar correspondencias)</td>
      <td>04:11</td>
    </tr>
    <tr >
      <th scope="row">13</th>
      <td>Ajustar valores  predeterminados</td>
      <td>04:17</td>
    </tr>

  </tbody>
</table>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
