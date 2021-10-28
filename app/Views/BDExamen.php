
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/examenbd.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsBDExamen.js"></script>

	<div id="container">
		<header>
			
			<h1> Examen de BD</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Que es un dato (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Atributo o informacion que refleja el valor de un objeto<br/>
				<input type="radio" name="p1" value = "b">b. un conjunto de letras con sentido<br/>
				


				<h3>2. Tipos de datos (1PT) </h3>
				<input type="radio" name="p2" value = "a">a. Cualitativo y cuantitativo <br/>
				<input type="radio" name="p2" value = "b">b. Cuantitativo y nominal<br/>
				<input type="radio" name="p2" value = "c">c. Nominal y cualitativo<br/>
				

				<h3>3. Cualitativo se refiere a cualidades (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Verdadero<br/>
				<input type="radio" name="p3" value = "b">b. Falso <br/>
				
				

				<h3>4. Que es informacion (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Conjunto de datos enlazados<br/>
				<input type="radio" name="p4" value = "b">b. Conjunto de datos que forman un significado<br/>
				
				
				<h3>5. Los esquemas de una base de datos son fisicvo y logicos (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Verdadero<br/>
				<input type="radio" name="p5" value = "b">b. Falso<br/>



				<h3>6. Que es redundancia de datos (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Datos relacionados entre si<br/>
				<input type="radio" name="p6" value = "b">b. Datos que se repiten y repiten<br/>

				

				<h3>7. Atributo es la propiedad de las entidades (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Verdadero"<br/>
				<input type="radio" name="p7" value = "b">b. Falso"<br/>
				

				<h3>8. La entidad es el nombre de la tabla (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Verdadero<br/>
				<input type="radio" name="p8" value = "b">b. Falso<br/>
				

				
				<h3>9. Que es una primay key (1PT)</h3>

				<input type="radio" name="p9" value = "a">a. Registro unico de una tabla<br/>
				<input type="radio" name="p9" value = "b">b. Columna que identifica de forma unica un registro en la tabla<br/>
				<input type="radio" name="p9" value = "c">c. Dato no repetido<br/>

				<h3>10. Cada tabla debe tener una llave Primaria (1PT)</h3>

				<input type="radio" name="p10" value = "a">a. Verdadero<br/>
				<input type="radio" name="p10" value = "b">b. Falso<br/>

				<h3>11. Un atributo multivaluado crea una nueva tabla (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Verdadero<br/>
				<input type="radio" name="p11" value = "b">b. Falso<br/>
				

				<h3>12. Un atributo compuesto crea una nueva tabla (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Verdadero<br/>
				<input type="radio" name="p12" value = "b">b. Falso<br/>
				
				<h3>13. La cardinalidad es el numero de entidades con la cual otra entidad puede asociar mediante una relacion (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Verdadero<br/>
				<input type="radio" name="p13" value = "b">b. Falso<br/>
				
				
				<h3>14. La relacion 1 a 1 indica que cada identidad de la primera relacion se va a realacionar con la entidad de la segunda relacion y viceversa (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Verdadero<br/>
				<input type="radio" name="p14" value = "b">b. Falso<br/>
				
				<h3>15. La relacion de n1 a muchos r2 no se puede relacion con varias entidades de r2, mientras que varias entidades r2 no pueden asociarce con la entidad n1 (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Verdadero<br/>
				<input type="radio" name="p15" value = "b">b. Falso<br/>
				
				
				<h3>16. Cuando la relacion son muchos a mucho se crea una nueva entidad (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero <br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. Normalizacion es (1PT)</h3>
				<input type="radio" name="p17" value = "a">a. Proceso de crear normas para tener un reglamento al crear la base de datos<br/>
				<input type="radio" name="p17" value = "b">b. Un standar al crear una bd<br/>
				<input type="radio" name="p17" value = "c">c. Aplicar normas con el fin de ordenar y mejorar una base de datos<br/>

				<h3>18. La Normalizacion de una BD corrige problemas de inserccion,problemas de redundancia y problemas de eliminacion (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Cuantas formas normales se necesita para corregir una Base de Datos (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Una forma normal<br/>
				<input type="radio" name="p19" value = "b">b. Tres formas normales<br/>
				<input type="radio" name="p19" value = "c">c. Dos formas normales<br/>
				
				

				<h3>20. El programa Erwin nos permite crear un diagrama de Base de datos Entidad-relacion (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Verdadero<br/>
				<input type="radio" name="p20" value = "b">b. Falso<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	
</body>


</html>