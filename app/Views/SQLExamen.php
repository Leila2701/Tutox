
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/examensql.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsSQLxamen.js"></script>

	<div id="container">
		<header>
			
			<h1> Examen de Facebook</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Cómo se seleccionan todos los registros de la tabla (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Select * from table_name<br/>
				<input type="radio" name="p1" value = "b">b. Select from table_name<br/>
				


				<h3>2. A qué se denomina Join (1PT) </h3>
				<input type="radio" name="p2" value = "a">a. Join is el proceso de recuperar ciertos datos de diferentes tablas y devolverlas al usuario <br/>
				<input type="radio" name="p2" value = "b">b. Join es una union<br/>
				<input type="radio" name="p2" value = "c">c. Join es el proceso para interactuar entre tablas<br/>
				

				<h3>3. Cómo agregar registros a una tabla (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Insert into table<br/>
				<input type="radio" name="p3" value = "b">b. INSERT into table_name VALUES (‘ALEX’, 33 , ‘M’) <br/>
				
				

				<h3>4. Cómo agregar columnas a una tabla (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. ALTER TABLE Department ADD AGE, NUMBER<br/>
				<input type="radio" name="p4" value = "b">b. ALTER TABLE Department ADD (AGE, NUMBER)<br/>
				
				
				<h3>5. Cómo cambiar el valor del campo (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Update<br/>
				<input type="radio" name="p5" value = "b">b. Insert<br/>



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
				

				<h3>17. Cuál es la función principal de una clave primaria en una tabla (1PT)</h3>
				<input type="radio" name="p17" value = "a">a. Es una norma establecida su funcion<br/>
				<input type="radio" name="p17" value = "b">b. Un standar al crear una bd<br/>
				<input type="radio" name="p17" value = "c">c. Es mantener la integridad interna en la tabla<br/>

				<h3>18. Puede una tabla tener más de una clave externa o foránea definida (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Cuales son todos los tipos de datos que puede utilizar un campo de tipo bolean  (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. false y or<br/>
				<input type="radio" name="p19" value = "b">b. True y false<br/>
				<input type="radio" name="p19" value = "c">c. and y or<br/>
				
				

				<h3>20. Un campo NULL en una tabla indica que este no tiene valor (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Verdadero<br/>
				<input type="radio" name="p20" value = "b">b. Falso<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	
</body>


</html>