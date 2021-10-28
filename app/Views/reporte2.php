<script src="<?= base_url('/resources/js/jquery.canvasjs.min.js') ?>"></script>
<script src="<?= base_url('/resources/js/jsReportes2.js') ?>"></script>

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

	<div class="col-md-12">
					
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center" style="color:#0B6470;font-weight: bold; size: 300px;">Temas por Cursos</h3>
			</div>
			<div class="panel-body text-justify">
				La cuenta con diversos cursos y cada uno posee una cantidad de temas, asi que se muestra una estadistica de todos los cursos por temas.
			</div>
		</div>
	</div>
	<br>
			<div class="row">					
	   			
	   			<div class="col-md-12">	
	   				
	   				<div class="row">
	   					<div class="form-group">
		   					<legend class="fieldcont"  style="color:#0B6470;font-weight: bold; size: 300px;">REPORTE</legend>
					   			<div  id="_menu">
					   			 Listado de Temas<img src="<?= base_url('resources/img/lupa.png') ?>" class='imagenes' id="reporte1"/><br />
					   		    </div>	
				   		</div>
				   	</div>	
	   				<div class="row">					
	   					<div class="col-md-5 form-group">
	   							<div  id="_datos">
	   								<p  class="lead" id="t_mensaje2"></p>
	   								<p  class="lead" id="t_titulo"></p>
	   								<table id="table"  class="table table-striped">
								        <thead>
								            <tr>                
								                <th data-field="v1">Curso</th>
								                <th data-field="v2">Temas</th>
								                
								            </tr>
								        </thead>
								    </table>

	   							</div>	
	   					</div>
	   					<div>
	   					<div class="row col-md-7">	

	   					<div id="repchar1" style="height: 300px; width: 100%;"></div>
					       </div>
					     </div>
	   				</div>
	   				
	   			</div>



	   					
		    </div>			
			
</div>

	</section>
	