<script src="<?= base_url('/resources/js/jquery.canvasjs.min.js') ?>"></script>
<script src="<?= base_url('/resources/js/jsReportes.js') ?>"></script>

<section class="main container">		
		<script>
			 	ruta='<?= base_url()?>';
			$(document).ready(function(){       
     		inicio();
      		ejecutar();
    	});
</script>
<br>
<div class="container"> 
			<div class="row">					
	   			<div class="col-md-5">
					
					<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title text-center" style="color:#0B6470;font-weight: bold;">Personas inscritas</h3>
						  </div>
						  <div class="panel-body text-justify">
						   Tutox es una plataforma de alfabetización digital, cada día contamos con mas suscriptores por eso se realiza un reporte donde nos muestra la cantidad de suscriptores con los que contamos agrupados por su género. 
						  </div>
					</div>
	   			</div>
	   			<div class="col-md-7">	
	   				
	   				<div class="row">
	   				<div class="form-group">
	   					<legend class="fieldcont" style="color:#0B6470;font-weight: bold;">REPORTE</legend>
				   			<div  id="_menu">
				   			 Listado de Personas<img src="<?= base_url('resources/img/lupa.png') ?>" class='imagenes' id="reporte1"/><br />
				   		    </div>	
				   		   
				   		</div>
				   	</div>	
	   				<div class="row">					
	   					<div class="form-group">
	   							<div  id="_datos">
	   								<p  class="lead" id="t_mensaje2"></p>
	   								<p  class="lead" id="t_titulo"></p>
	   								<table id="table"  class="table table-striped">
								        <thead>
								            <tr>                
								                <th data-field="v1">Genero</th>
								                <th data-field="v2">Valores</th>
								                
								            </tr>
								        </thead>
								    </table>

	   							</div>	
	   					</div>
	   				</div>
	   				<div class="row">	

	   					<div id="repchar1" style="height: 300px; width: 100%;"></div>
					       </div>
	   				</div>



	   					
				</div>			
			
				</div>

	</section>
	