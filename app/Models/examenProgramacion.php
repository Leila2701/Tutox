<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/excel.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsProgramacionExamen.js"></script>
	<div id="container">
		<header>
			
			<h1> Examen de Excel</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Excel es: (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Un programa para realizar calculos matematicos y Estadisticos.<br/>
				<input type="radio" name="p1" value = "b">b. Un programa para realizar diapositivas.<br/>
				<input type="radio" name="p1" value = "c">c. Un programa para elaborar CD.<br/>


				<h3>2. Que es una celda? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Conjunto de filas seleccionadas horizontalmente. <br/>
				<input type="radio" name="p2" value = "b">b. Conjunto de columnas seleccionadas verticalmente.<br/>
				<input type="radio" name="p2" value = "c">c. Interseccion de una columna y una fila.<br/>
				

				<h3>3. Las Columnas se identifican con Letras? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Verdadero<br/>
				<input type="radio" name="p3" value = "b">b. Falso<br/>
				
				

				<h3>4. Las Filas se identifican con Numeros? (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Verdadero<br/>
				<input type="radio" name="p4" value = "b">b. Falso<br/>
				
				
				<h3>5. Una formula en Excel debe de comenzar por el signo? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. +<br/>
				<input type="radio" name="p5" value = "b">b. =<br/>
				<input type="radio" name="p5" value = "c">c. /<br/>
				<input type="radio" name="p5" value = "d">d. #<br/>

				<h3>6. La formula para realizar una suma es: (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. =suma(A3:A6)<br/>
				<input type="radio" name="p6" value = "b">b. suma(a3:a6)<br/>
				<input type="radio" name="p6" value = "c">c. suma(A3+A2).<br/>
				

				<h3>7. Que operacion matematica se puede realizar utilizando el operador " * " ? (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Suma<br/>
				<input type="radio" name="p7" value = "b">b. Multiplicacion<br/>
				<input type="radio" name="p7" value = "c">c. Otra<br/>
				

				<h3>8. La formula para dividir correcta es: (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. =div(A3:A5)<br/>
				<input type="radio" name="p8" value = "b">b. =(A3/A5)<br/>
				<input type="radio" name="p8" value = "c">c. (A3*A5)<br/>

				
				<h3>9. Indique cual de estas formulas es la correcta:(1PT)</h3>

				<input type="radio" name="p9" value = "a">a. =*X3 Y3<br/>
				<input type="radio" name="p9" value = "b">b. X3*Y3=<br/>
				<input type="radio" name="p9" value = "c">c. =3X*3Y<br/>

				<h3>10. Excel sirve para editar documentos de texto? (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. Verdadero<br/>
				<input type="radio" name="p10" value = "b">b. Falso<br/>

				<h3>11. Que es una HOJA en excel? (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Area de trabajo de un libro de Excel<br/>
				<input type="radio" name="p11" value = "b">b. Conjunto de archivos de un libro de excel<br/>
				<input type="radio" name="p11" value = "c">c. Hoja de trabajo compuesta por filas y columnas<br/>

				<h3>12. Se puede modificar el volumen de las celdas? (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Verdadero<br/>
				<input type="radio" name="p12" value = "b">b. Falso<br/>
				
				<h3>13. Un archivo de Excel se denomina tambien libro? (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Verdadero<br/>
				<input type="radio" name="p13" value = "b">b. Falso<br/>
				

				<h3>14. Cual es el resultado del siguiente ejercicio? =(8 - (6+2))/2 (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. 4<br/>
				<input type="radio" name="p14" value = "b">b. 0<br/>
				<input type="radio" name="p14" value = "c">c. 2<br/>
				

				<h3>15. La siguiente operacion matematica =(b2+c2+d2)/3 corresponde a:(1PT)</h3>
				<input type="radio" name="p15" value = "a">a. La suma de tres datos<br/>
				<input type="radio" name="p15" value = "b">b. La multiplicacion de tres datos<br/>
				<input type="radio" name="p15" value = "c">c. El promedio de tres datos<br/>
				
				<h3>16.  La opcion "FILTRAR DATOS", es una forma muy comun de agrupar, seleccionar o mostrar la informacion deseada de un conjunto extenso de datos. (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero<br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. En Excel es posible ocultar toda una fila o una columna sin perder los datos que en ellas se encuentran? </h3>
				<input type="radio" name="p17" value = "a">a. Verdadero<br/>
				<input type="radio" name="p17" value = "b">b. Falso<br/>

				<h3>18. Es posible inmovilizar celdas o filas para una mejor vision de la informacion en una tabla (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Para cambiar el nombre a una hoja de calculo haciendo uso del metodo mas directo y rapido, se deben realizar los siguientes pasos: (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Hacer doble clic sobre el nombre de la hoja en su etiqueta 2.Escribir el nuevo nombre de la hoja. 3.Pulsar intro<br/>
				<input type="radio" name="p19" value = "b">b. A y B son correctas<br/>
				<input type="radio" name="p19" value = "c">c. Otra<br/>

				

				<h3>20. # ¡VALOR! Este error en una formula significa: (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Excel no reconoce el texto de la formula, por lo que no puede realizar la operacion matematica<br/>
				<input type="radio" name="p20" value = "b">b. Especifica una interseccion de dos areas que no se interceptan<br/>
				<input type="radio" name="p20" value = "c">c. Funcion o formula no disponible en Excel<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	<script src="js/script.js"></script>
</body>


</html>