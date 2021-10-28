
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/word.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsWordExamen.js"></script>

	<div id="container">
		<header>
			
			<h1> Examen de Word</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Microsoft Word es un procesador de texto? (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Verdadero<br/>
				<input type="radio" name="p1" value = "b">b. Falso<br/>
				


				<h3>2. De cual menu se puede obtener la opcion de agregar una imagen, al documento Word? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Desde el menu "Archivo"<br/>
				<input type="radio" name="p2" value = "b">b. Desde el menu "Inicio"<br/>
				<input type="radio" name="p2" value = "c">c. Desde el menu "Insertar"<br/>
				

				<h3>3. Podemos cambiar el tipo de papel a utilizar en un documento Word? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Verdadero<br/>
				<input type="radio" name="p3" value = "b">b. Falso<br/>
				
				

				<h3>4. Como se llaman los tipos de letras que utilizamos en Word? (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Fonts<br/>
				<input type="radio" name="p4" value = "b">b. Letras<br/>
				<input type="radio" name="p4" value = "c">c. Manuales<br/>

				
				
				<h3>5. Que tipo de documentos podemos hacer en word? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Planillas de Calculos<br/>
				<input type="radio" name="p5" value = "b">b. Presentaciones<br/>
				<input type="radio" name="p5" value = "c">c. Cartas, Curriculum Vitae, Informes <br/>
				<input type="radio" name="p5" value = "d">d. Ninguna de las Anteriores.<br/>

				<h3>6. Que funcion cumple, la siguiente combinacion de teclas: CTRL+N (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Agrega informacion de la fecha y hora a nuestro documento<br/>
				<input type="radio" name="p6" value = "b">b. Muestra funciones ocultas de la pagina<br/>
				<input type="radio" name="p6" value = "c">c. Agrega efecto negrita al texto seleccionado<br/>
				

				<h3>7. En que menu encontramos, la funcion de tablas? (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Menu "IMPRIMIR"<br/>
				<input type="radio" name="p7" value = "b">b. Menu "INICIO"<br/>
				<input type="radio" name="p7" value = "c">c. Menu "INSERTAR"<br/>
				

				<h3>8. Para agregar efecto de Cursiva a un texto, primero lo selecciono y después presiono las teclas, CTRL+C (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Verdadero<br/>
				<input type="radio" name="p8" value = "b">b. Falso<br/>
				

				
				<h3>9. La maquina de escribir es el antecesor, de microsoft WORD? (1PT)</h3>

				<input type="radio" name="p9" value = "a">a. Verdadero<br/>
				<input type="radio" name="p9" value = "b">b. Falso<br/>
				

				<h3>10. Podemos insertar texto y/o imagenes, desde Internet a nuestro documento WORD? (1PT)
				</h3>
				<input type="radio" name="p10" value = "a">a. Verdadero<br/>
				<input type="radio" name="p10" value = "b">b. Falso<br/>

				<h3>11. WORD, nos sirve para hacer planillas de calculo? (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Verdadero<br/>
				<input type="radio" name="p11" value = "b">b. Falso<br/>
				

				<h3>12. Cual es el paso mas importante, al comenzar a trabajar con un documento WORD? (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Colocar el titulo al documento<br/>
				<input type="radio" name="p12" value = "b">b. Poner Margenes al Documento<br/>
				<input type="radio" name="p12" value = "c">c. Grabar el documento a penas empezamos a trabajar en el<br/>
				
				<h3>13. Que comando nos permite deshacer una modificacion? (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. CTRL+C<br/>
				<input type="radio" name="p13" value = "b">b. CTRL+V<br/>
				<input type="radio" name="p13" value = "c">c. CRTL+Z<br/>
				
				
				<h3>14. Word nos permite corregir errores de escritura? (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Verdadero<br/>
				<input type="radio" name="p14" value = "b">b. Falso<br/>
				
				<h3>15. Word nos permite corregir errores de idioma? (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Verdadero<br/>
				<input type="radio" name="p15" value = "b">b. Falso<br/>
				
				
				<h3>16. Existen imagenes pre disenadas en Word? (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero<br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. Es recomendable utilizar en corrector ortografico de la siguiente forma: (1PT)</h3>
				<input type="radio" name="p17" value = "a">a. En forma automatica<br/>
				<input type="radio" name="p17" value = "b">b. Nosotros delimitamos lo que queremos corregir
				<br/>
				<input type="radio" name="p17" value = "c">c. Corregir solo palabras en otro idioma<br/>

				<h3>18. El cuadro de texto, nos sirve para? (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Ordenar la informacion dentro de nuestro documento<br/>
				<input type="radio" name="p18" value = "b">b. Para insertar videos desde internet<br/>
				<input type="radio" name="p18" value = "c">c. Asignar URL al campo de datos<br/>
				

				<h3>19. En Word, no podemos agregar portadas a nuestro trabajos? (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Verdadero<br/>
				<input type="radio" name="p19" value = "b">b. Falso<br/>
				
				

				<h3>20. Se puede grabar con otro nombre un documento que ya se encuentre guardado? (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Verdadero<br/>
				<input type="radio" name="p20" value = "b">b. Falso<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	
</body>


</html>