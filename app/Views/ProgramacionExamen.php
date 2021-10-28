
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/examenprogramacion.css" rel="stylesheet">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsProgramacionExamen.js"></script>

	<div id="container">
		<header>
			
			<h1> Examen de Facebook</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Qué es un lenguaje de programación? (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Lenguaje artificial para controlar el comportamiento de una computadora<br/>
				<input type="radio" name="p1" value = "b">b. Lenguaje de computadoras<br/>
				


				<h3>2. Que es la codificacion (1PT) </h3>
				<input type="radio" name="p2" value = "a">a. Manipular datos para que no sea visibles <br/>
				<input type="radio" name="p2" value = "b">b. Encodificar un codigo<br/>
				<input type="radio" name="p2" value = "c">c. Proceso por el cual la información de una fuente es convertida en símbolos para ser comunicada<br/>
				

				<h3>3. Que es programar (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Resolver problemas ejecutar u problema de logica darle ordenes y comandos ala computadora<br/>
				<input type="radio" name="p3" value = "b">b. Hacer un programa de tareas <br/>
				
				

				<h3>4. Un programa es una secuencia de instrucciones (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. no se<br/>
				<input type="radio" name="p4" value = "b">b. Falso<br/>
				<input type="radio" name="p4" value = "c">c. Verdadero<br/>

				
				
				<h3>5. Un algoritmo es un conjunto de pasos para hallar una solucion a un problema (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Verdadero<br/>
				<input type="radio" name="p5" value = "b">b. Falso<br/>
				<input type="radio" name="p5" value = "c">c. no se sabe <br/>


				<h3>6. La programacion extructurada son codigos secuenciales (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Verdadero<br/>
				<input type="radio" name="p6" value = "b">b. Falso<br/>

				

				<h3>7. La programacion orientada a objetos es en orden secuencial (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Falso"<br/>
				<input type="radio" name="p7" value = "b">b. Verdadero"<br/>
				

				<h3>8. Una variable es un tipo de dato que puede cambiar su valor en cualquier momento (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Falso<br/>
				<input type="radio" name="p8" value = "b">b. Verdadero<br/>
				

				
				<h3>9. Una constante es un dato que siempre tendra el mismo valor (1PT)</h3>

				<input type="radio" name="p9" value = "a">a. Verdadero<br/>
				<input type="radio" name="p9" value = "b">b. Falso<br/>
				<input type="radio" name="p9" value = "c">c. No se<br/>

				<h3>10. Un metodo es una serie de pasos que retorna un valor (1PT)</h3>

				<input type="radio" name="p10" value = "a">a. Falso<br/>
				<input type="radio" name="p10" value = "b">b. Verdadero<br/>

				<h3>11. cuantos tipos de condiciones hay (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Solo uno<br/>
				<input type="radio" name="p11" value = "b">b. IF, ELSE, DO WHLE<br/>
				<input type="radio" name="p11" value = "c">c. IF, ELSE, SWITCH<br/>
				

				<h3>12. un archivo ejecutable es aquel que no necesita compilar manualmente (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Falso<br/>
				<input type="radio" name="p12" value = "b">b. Verdadero<br/>
				
				<h3>13. Las S.O de las computadoras tienen un lenguaje de programacion (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Verdadero<br/>
				<input type="radio" name="p13" value = "b">b. Falso<br/>
				
				
				<h3>14. Un estructura switch tienen un stock con un break en cada caso (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Verdadero<br/>
				<input type="radio" name="p14" value = "b">b. Falso<br/>
				
				<h3>15. Un bucle es una extructura que se repite (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Verdadero<br/>
				<input type="radio" name="p15" value = "b">b. Falso<br/>
				
				
				<h3>16. Un do while es un bucle (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero <br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. Un switch es un bucle (1PT)</h3>
				<input type="radio" name="p17" value = "a">a. Verdadero<br/>
				<input type="radio" name="p17" value = "b">b. Falsoo<br/>
				<input type="radio" name="p17" value = "c">c. No se<br/>

				<h3>18. Una extructura for es una condicion (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Un framework es (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Un lenguaje de programacion<br/>
				<input type="radio" name="p19" value = "b">b. Marco de trabajo<br/>
				<input type="radio" name="p19" value = "c">c. Moderador <br/>
				
				

				<h3>20. Una funcion es un metodo que devuelve una funcion (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Falso<br/>
				<input type="radio" name="p20" value = "b">b. Verdadero<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	
</body>


</html>