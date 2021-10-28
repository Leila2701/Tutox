
function inicio(){ 
$("#_datos").hide();
$("#_menu").show();

}

function ejecutar(){ 

 $("#reporte1").click(function() {
	
	$.ajax({
        data: {},
        url: ruta+'/Reporte/doRep1',
        type: 'post',
        dataType: 'json',
        success: function(e) {
    		var index;
        		
      if (e.data.length>0){
        $("#_datos").show();   
        $("#_menu").hide();
        $("#t_titulo").html(e.titulorep);           	
          
          $(function () {
			     $('#table').bootstrapTable({
			        data: e.data
			      });

			});

         
			var chart = new CanvasJS.Chart("repchar1",
	{

		title:{
			text: e.titulorep
		},
                animationEnabled: true,
       axisY: {
        title: "Cantidad"
      },
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},		
		data: [
		{        
			
			type: "pie",
			showInLegend: true,
					yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
						
			legendMarkerColor: "grey",
        	legendText: "Cantidad",
        	dataPoints: e.datagrafico		
			
		}
		]
	});
	chart.render();
	}
			else{
			$("#t_mensaje2").html("No hay datos para mostrar");	
				
			}
            }
       
    });	

    });	
     


 
 }   
 
