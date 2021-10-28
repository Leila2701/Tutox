function verificarRespuestas(){
	var total = 20;
	var puntos = 0;


	

	var myForm = document.forms["Examen"];
	var respuesta= ["b","a","a","c","c","a","a","c","a","a","a","a","b","c","c","b","a","b","a","c"];




	for (var i = 1; i <= total; i++){
		if (myForm["p" + i].value === null || myForm["p" + i.value === ""]){
		alert("Por favor responda la pregunta "+ i);
		return false;

		}else{
			if (myForm["p" + i].value === respuesta[i - 1]){
				puntos++;

			}
		}

	}
	//Display Results

	var resultado = document.getElementById('resultado');
	resultado.innerHTML ='<h3>Obtuvistes <span>'+puntos+'</span> de <span>'+total+' puntos</span></h3>';
	//alert('you scored '+score+'out of' +total);
	return false;

}
