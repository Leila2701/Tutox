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
			
			<h1> Examen de CorelDraw</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. CorelDraw es: (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Un programa para realizar y editar graficos vectoriales .<br/>
				<input type="radio" name="p1" value = "b">b. Un programa para realizar diapositivas.<br/>
				<input type="radio" name="p1" value = "c">c. Un programa para elaborar CD.<br/>


				<h3>2. Que es una soldar? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Conjunto de filas seleccionadas horizontalmente. <br/>
				<input type="radio" name="p2" value = "b">b. Conjunto de columnas seleccionadas verticalmente.<br/>
				<input type="radio" name="p2" value = "c">c. Es una Herramienta que nos brinda CD.<br/>
				

				<h3>3. Se pueden hacer efectos 3D? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Verdadero<br/>
				<input type="radio" name="p3" value = "b">b. Falso<br/>
				
				

				<h3>4. Corel Draw es igual que Photoshot? (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Verdadero<br/>
				<input type="radio" name="p4" value = "b">b. Falso<br/>
				
				
				<h3>5. Que convinacion de teclas juntan varias piesas en el documento? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. ctrl + E <br/>
				<input type="radio" name="p5" value = "b">b. ctrl + G<br/>
				<input type="radio" name="p5" value = "c">c. ctrl + alt + W<br/>
				<input type="radio" name="p5" value = "d">d. ctrl + K<br/>

				<h3>6. Que convinacion de teclas separan varias piesas en el documento? (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. ctrl + B<br/>
				<input type="radio" name="p6" value = "b">b. ctrl + K<br/>
				<input type="radio" name="p6" value = "c">c. ctrl + G.<br/>
				

				<h3>7. Se puede hacer operaciones matematicas en CD? (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Si<br/>
				<input type="radio" name="p7" value = "b">b. No<br/>
				<input type="radio" name="p7" value = "c">c. Tal vez<br/>
				

				<h3>8. En CorelDraw le puedes dar texturas alas le Letras ? (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. No<br/>
				<input type="radio" name="p8" value = "b">b. Si<br/>
				<input type="radio" name="p8" value = "c">c. N.A.<br/>

				
				<h3>9. Si se desea dibujar un cuadrado desde el centro hacia afuera se debe pulsar que combinación de teclas:(1PT)</h3>

				<input type="radio" name="p9" value = "a">a. En la Entrada del menu <br/>
				<input type="radio" name="p9" value = "b">b. abres la herramienta de relleno degradado<br/>
				<input type="radio" name="p9" value = "c">c. No se encuentra<br/>

				<h3>10.  Es un modo de dibujo que conecta puntos. (qué herramienta se utiliza) (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. asignas el degradado (línea, conico, radial o cuadrado)<br/>
				<input type="radio" name="p10" value = "b">b. Solo se utiliza la Herramianta degrade<br/>

				<h3>11. Se pueden crear objetos de forma irregular si se eliminan las partes del objeto que se solapa con la opción (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Dar forma y luego con las herramienta forma<br/>
				<input type="radio" name="p11" value = "b">b. Conjunto de archivos de un libro de excel<br/>
				<input type="radio" name="p11" value = "c">c. Hoja de trabajo compuesta por filas y columnas<br/>

				<h3>12. Exixsten los colores directos en CD? (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Verdadero<br/>
				<input type="radio" name="p12" value = "b">b. Falso<br/>
				
				<h3>13. Un archivo de CorelDraw se denomina tambien libro? (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Falso<br/>
				<input type="radio" name="p13" value = "b">b. Verdadero<br/>
				

				<h3>14. Cuáles son los colores directos? (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Son aquellos que podemos encontrar en la pantalla principal de Corel Draw<br/>
				<input type="radio" name="p14" value = "b">b. Son los que no aparecen en pantalla<br/>
				<input type="radio" name="p14" value = "c">c. N.A.<br/>
				

				<h3>15. Como importamos un texto:(1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Se puede importar el texto de varias formas: menú archivo, opcion importar   o    también lo puedes hacer copiando y pegando desde otros archivos<br/>
				<input type="radio" name="p15" value = "b">b. La multiplicacion de tres datos<br/>
				<input type="radio" name="p15" value = "c">c. El ciopiar y pegar de tres datos<br/>
				
				<h3>16.  La opcion "FILTRAR DATOS", es una forma muy comun de agrupar, seleccionar o mostrar la informacion deseada de un conjunto extenso de datos. (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero<br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. En Excel es posible ocultar toda una fila o una columna sin perder los datos que en ellas se encuentran? </h3>
				<input type="radio" name="p17" value = "a">a. Verdadero<br/>
				<input type="radio" name="p17" value = "b">b. Falso<br/>

				<h3>18. Función del efecto mezcla (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Permite que dos o mas objetos puedan mezclarse<br/>
				<input type="radio" name="p18" value = "b">b. no permite el conjunto de dos Objetos<br/>
				

				<h3>19. Cuáles son los tipos de relleno (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Relleno degradado, relleno uniforme, relleno de textura, de patro y relleno PostScript.<br/>
				<input type="radio" name="p19" value = "b">b. A y B son correctas<br/>
				<input type="radio" name="p19" value = "c">c. Relleno degradado, relleno uniforme, relleno<br/>

				

				<h3>20. Explica la diferencia entre texto artístico y texto de párrafo (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Texto artístico a diferencia del de párrafo este puede añadir efectos especiales tales como sombra.<br/>
				<input type="radio" name="p20" value = "b">b. Especifica una interseccion de dos areas que no se interceptan<br/>
				<input type="radio" name="p20" value = "c">c. Funcion o formula no disponible en Excel<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	<script src="js/script.js"></script>
</body>


</html>