<!DOCTYPE html>
<html>
<head> 
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/excel.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsExamen.js"></script>
	<div id="container">
		<header>
			
			<h1> Examen de PHP</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. ¿Qué significan las siglas PHP? (1PT)</h3>
	<!--hhdh-->	<input type="radio" name="p1" value = "a">a. Las siglas PHP significan "PHP: Hypertext Preprocessor"..<br/>
				<input type="radio" name="p1" value = "b">b. Un programa para realizar diapositivas.<br/>
				<input type="radio" name="p1" value = "c">c. Un programa para elaborar CD.<br/>


				<h3>2. ¿Qué versiones actuales de PHP existen? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. solo existe la V4. <br/>
				<input type="radio" name="p2" value = "b">b. ya no exixten Vercines actuales.<br/>
	<!--hhdh-->	<input type="radio" name="p2" value = "c">c. Las versiones más recientes de PHP son 7.2, 7.3 y 7.4. Cada versión tiene un tiempo de soporte asignado..<br/>
				

				<h3>3. ¿Es posible ejecutar un script PHP desde la línea de comandos? (1PT)</h3>

<!--hhdh-->		<input type="radio" name="p3" value = "a">a. Verdadero<br/>
				<input type="radio" name="p3" value = "b">b. Falso<br/>
				
				

				<h3>4. ¿Cuál es la principal diferencia entre PHP 4 y 5? (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Son iguales<br/>
	<!--hhdh-->	<input type="radio" name="p4" value = "b">b. PHP 5 incluye muchas más características sobre programación orientada a objetos.<br/>
				
				
				<h3>5. ¿Como se represneta la comparación de objetos en PHP? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. +--<br/>
	<!--hhdh-->	<input type="radio" name="p5" value = "b">b. ==<br/>
				<input type="radio" name="p5" value = "c">c. >/<br/>
				<input type="radio" name="p5" value = "d">d. #<br/>

				<h3>6. Cuál es la principal diferencia entre require() y require_once() (1PT)</h3>
				<input type="radio" name="p6" value = "a">a.require() y require_once() cumplen con la misma tarea, pero la 2da función verifica si el script PHP ya se ha incluido, para evitar ejecutarlo nuevamente.<br/>
	<!--hhdh-->	<input type="radio" name="p6" value = "b">b. Cumplen la mismaa funcion <br/>
				<input type="radio" name="p6" value = "c">c. N.A.<br/>
				

				<h3>7. ¿Qué función de PHP permite mostrar la información de una variable en un formato legible para humanos? (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. ctrl + P<br/>
	<!--hhdh--> <input type="radio" name="p7" value = "b">b. Para imprimir tal resultado usamos print_r()<br/>
				<input type="radio" name="p7" value = "c">c. Otra funcion<br/>
				

				<h3>8. ¿Para qué es útil la función file_get_contents()? (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. No nos permite el contenido de  un archivo<br/>
	<!--hhdh-->	<input type="radio" name="p8" value = "b">b. Nos permite leer el contenido de un archivo. Y es posible almacenar el resultado en una variable string.<br/>
				<input type="radio" name="p8" value = "c">c. Todas las Anteriones<br/>

				
				<h3>9. ¿Para qué es útil la función strip_tags() de PHP? (1PT)</h3>

				<input type="radio" name="p9" value = "a">a. Para traer la fecha<br/>
	<!--hhdh-->	<input type="radio" name="p9" value = "b">b. Nos permite limpiar una cadena y eliminar las etiquetas HTML en su interior.<br/>
				<input type="radio" name="p9" value = "c">c. Para traer numero formatos en decimales <br/>

				<h3>10. ¿Cómo pueden interactuar PHP y Javascript? (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. Falso<br/>
	<!--hhdh-->	<input type="radio" name="p10" value = "b">b. verdadero<br/>

				<h3>11. ¿Cómo se puede pasar una variable por referencia?(1PT)</h3>
	<!--hhdh--> <input type="radio" name="p11" value = "a">a. A fin de pasar una variable by reference usamos un ampersand delante, de esta manera: $var1 = &$var2. <br/>
				<input type="radio" name="p11" value = "b">b. Solo llamandola con un objeto<br/>
				<input type="radio" name="p11" value = "c">c. N.A. <br/>

				<h3>12. ¿Es posible comparar un integer 12 con un string "13" en PHP? (1PT)</h3>
	<!--hhdh-->	<input type="radio" name="p12" value = "a">a. Si <br/>
				<input type="radio" name="p12" value = "b">b. No <br/>
				
				<h3>13. ¿Para qué se usa la función func_num_args()? (1PT)</h3>
	<!--hhdh-->	<input type="radio" name="p13" value = "a">a. Indica el número de argumentos que se han enviado a una función (aquella desde la que se está usando).<br/>
				<input type="radio" name="p13" value = "b">b. Cuneta el numero de argumentos. <br/>
				

				<h3>14. ¿Qué significa acceder a una clase usando ::? (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. se utiliza el == <br/>
	<!--hhdh-->	<input type="radio" name="p14" value = "b">b. Se usa :: para acceder a métodos estáticos (static methods) que no requieren inicializar objetos.<br/>
				<input type="radio" name="p14" value = "c">c. la estructura +--<br/>
				

				<h3>15. En PHP, ¿los objetos son pasados por valor o por referencia? (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. todos los datos se agrupan GRUp BY<br/>
				<input type="radio" name="p15" value = "b">b. La multiplicacion de tres datos<br/>
	<!--hhdh-->	<input type="radio" name="p15" value = "c">c. En PHP los objetos son pasados by value, a menos que explícitamente se decida pasar by reference <br/>
				
				<h3>16. ¿Se puede propagar una session id? (1PT)</h3>

	<!--hhdh-->	<input type="radio" name="p16" value = "a">a. Verdadero<br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. ¿Cómo actúa el operador === cuando es usado con arreglos? </h3>
	<!--hhdh-->	<input type="radio" name="p17" value = "a">a. $a === $b es TRUE si $a y $b tienen los mismos pares clave-valor, en el mismo orden y con los mismos tipos.<br/>
				<input type="radio" name="p17" value = "b">b. actua como un comparador<br/>

				<h3>18. ¿Usas Composer brinda beneficios te aporta? (1PT)</h3>

	<!--hhdh-->	<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. ¿Qué son las inyecciones SQL y cómo prevenirlas? (1PT)</h3>
	<!--hhdh-->	<input type="radio" name="p19" value = "a">a. Las inyecciones SQL buscan alterar consultas SQL que van a ser o están siendo ejecutadas.<br/>
				<input type="radio" name="p19" value = "b">b. A y B son correctas<br/>
				<input type="radio" name="p19" value = "c">c. Otra<br/>

				

				<h3>20. ¿Qué son los PSRs? (1PT)</h3>
	<!--hhdh-->	<input type="radio" name="p20" value = "a">a. Las siglas PSRs significan PHP Standards Recommendations. Como su nombre lo indica, son recomendaciones que buscan estandarizar aspectos comunes del desarrollo con PHP.<br/>
				<input type="radio" name="p20" value = "b">b. Especifica una interseccion de dos areas que no se interceptan<br/>
				<input type="radio" name="p20" value = "c">c. Funcion o formula no disponible en Excel<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	<script src="js/script.js"></script>
</body>


</html>