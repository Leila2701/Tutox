 <script src="<?= base_url()?>/resources/js/jsPortada.js"></script>

 <script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    listarcursos();
  });
</script>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" datSa-interval="10000">
      <img src="<?php echo base_url();?>/resources/img/word.jpg" class="d-block w-100" alt="..." style="width: 100%">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1 class="cword">Word</h1>
         <p class="text-xl"><a class="btn btn-primary" href="<?php echo base_url();?>/cnPersona/index"role="button">Inscribirse</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="<?php echo base_url();?>/resources/img/excel.jpg" class="d-block w-100" alt="..." style="width: 100%">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1 class="cexcel">Excel</h1>
          <p class="text-xl"><a class="btn btn-success" href="<?php echo base_url();?>/cnPersona/index"role="button">Inscribirse</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>/resources/img/powerpoint.jpg" class="d-block w-100" alt="..." style="width: 100%">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1 class="cpower">PowerPoint</h1>
          <p class="text-xl"><a class="btn btn-warning" href="<?php echo base_url();?>/cnPersona/index"role="button">Inscribirse</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>/resources/img/facebook.jpg" class="d-block w-100" alt="..." style="width: 100%">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1 class="cword">Facebook para negocios</h1>
         <p class="text-xl"><a class="btn btn-warning" href="<?php echo base_url();?>/cnPersona/index"role="button">Inscribirse</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br></br>

<div class="container">

  <div class="row">

    <div class="col-sm-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title text-center" style="color: #468889; font-weight: bold;">Destacados</h2>
        <div class="row">
          
          <div id="reporte" class="row">  
           
          </div> 
        </div>
      </div><!-- /.blog-post -->
      <br></br>
      <div class="blog-post">
        <h2 class="blog-post-title text-center" style="color: #468889; font-weight: bold;">Pack de cursos</h2>
        <div class="row">
          <div class="col-sm-6">
            <div class="card" style="background-image: radial-gradient(circle, #ffffff, #f8f8fa, #eff2f5, #e5edee, #dde7e6);">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #f2317f; font-weight: bold;">Ofimática</h5>
                <img class="card-img-top" src="<?php echo base_url();?>/resources/img/ofimastica.jpg" class="card-img-top"style="width:100%;">
                <p class="card-text text-justify">Conocimiento en el manejo del computador y de las principales herramientas de software de ofimática que se utiliza en las empresas.</p>
                <a href="<?php echo base_url();?>/Curso/index" class="btn btn-primary btn-block">INGRESAR</a>
              </div>
            </div>
            
          </div>
          <div class="col-sm-6">
            <div class="card" style="background-image: radial-gradient(circle, #ffffff, #f8f8fa, #eff2f5, #e5edee, #dde7e6);">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #f2317f; font-weight: bold;">Diseño Gráfico</h5>
                <img class="card-img-top" src="<?php echo base_url();?>/resources/img/diseño.jpg" class="card-img-top"style="width:100%;">
                <p class="card-text text-justify">Al comunicar de manera visual una idea, el arte, los colores, el motivo y por supuesto conocer el público al que va dirigido.</p>
                <a href="<?php echo base_url();?>/Curso/index" class="btn btn-primary btn-block">INGRESAR</a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.blog-post -->
      <br></br>
      <div class="blog-post">
        <h2 class="blog-post-title text-center" style="color: #468889; font-weight: bold;">Cursos Nuevos</h2>
        <div class="row">
          
          <div id="reporte2" class="row">  
           
          </div> 
        </div>
      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

    <div class="col-sm-3 offset-sm-1 blog-sidebar">
      <div class="sidebar-module sidebar-module-inset">
        <h4 class="ntit" style="color:#519D9E; font-weight: bold;">Alfabetizacion Digital</h4>
        <p class="text-justify">La alfabetización digital es la capacidad de una persona para realizar diferentes tareas en un ambiente digital. Esta definición genérica engloba muchos matices ya que incluiría la habilidad para localizar, investigar y analizar información usando la tecnología, así como ser capaces de elaborar contenidos y diseñar propuestas a través de medios digitales.</p>
      </div>
      <img src="<?php echo base_url();?>/resources/img/alfabetizacion.jpg" style="width:100%;">
      <div class="sidebar-module">
        <h4 class="ntit" style="color:#519D9E; font-weight: bold;">Anuncio</h4>
        <p class="text-justify">Según, estudios que realizo la UNESCO hace mención que el 15% de la población global es analfabeta. Entonces, ya no estés en ese grupo del 15%, entra a nuestros cursos gratis que te ayudaran a tener conocimientos de la época, al igual, que puedes conseguir trabajo con la educación básica que se te brinda esta aplicación web y así poder aportar a la sociedad. ¡No lo pienses más y atrévete a ver nuestros videos!</p>
      </div>
      
    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->




