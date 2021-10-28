 <script src="<?= base_url()?>/resources/js/jsCurso.js"></script>

 <script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    listarcurso();
  });
</script>
<script>
  ruta='<?= base_url()?>';  
  $(document).ready(function() {
    listarcursoa();
  });
</script>
<br>

<script type="text/javascript">
    function confirmacion()
    {
        var respuesta=confirm("Desea ingresar al curso");
        if(respuesta==true)
        {
            
            return true;
        }else{
            return false;
        }
    }
</script>
<div id="layoutSidenav_content">
  <main>


             <div class="container-fluid">

                <div class="card" style="background-color: #E6FAF7;border:0;">
                  <div class="card-header" style="background-color: #95C6BE;">
                    <h2 class="text-center" style="color: #F43E71; font-weight: bold;">CURSOS BÁSICOS</h2>
                  </div>
                  <div class="card-body">
                    <div id="reporte" class="row">  
                     
                    </div> 
                  </div>
                </div>
                <div class="card" style="background-color: #E6FAF7;border:0;">
                  <div class="card-header" style="background-color: #95C6BE;">
                    <h2 class="text-center" style="color: #F43E71; font-weight: bold;">CURSOS AVANZADOS</h2>
                  </div>
                  <div class="card-body">
                    <div id="reporte2" class="row">  
                     
                    </div> 
                  </div>
                </div>
                <div class="card" style="background-color: #E6FAF7;border:0;">
                  <div class="card-header" style="background-color: #95C6BE;">
                    <h2 class="text-center" style="color: #F43E71; font-weight: bold;">DISEÑO GRÁFICO</h2>
                  </div>
                  <div class="card-body">
                    <div id="reporte3" class="row">  
                     
                    </div> 
                  </div>
                </div>
                
              </div>


</main>
</div>












