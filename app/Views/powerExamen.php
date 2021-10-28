<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/power.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsPowerExamen.js"></script>
	<div id="container">
		<header>
			
			<h1> Examen de PowerPoint</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Como entro a Power Point? (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Haz clic en el menu inicio/Todos los programas/Microsoft office/PowerPoin.<br/>
				<input type="radio" name="p1" value = "b">b. Haz clic en el menu inicio/Accesorios/PowerPoint.<br/>
				<input type="radio" name="p1" value = "c">c. Haz clic en el menu inicio/Mis documentos/Microsoft office/PowerPoint.<br/>


				<h3>2 Que es PowerPoint? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Es un juego interactivo que te sirve como guia en el uso de Microsoft office <br/>
				<input type="radio" name="p2" value = "b">b. Es un programa que te sirve para hacer presentaciones con textos esquematizados y facil de entender.<br/>
				<input type="radio" name="p2" value = "c">c. Es una pagina web interactiva que te permite presentar tu trabajo de una forma mas organizada.<br/>
				

				<h3>3. Como agregar una diapositiva? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Menu archivo/Nueva diapositiva.<br/>
				<input type="radio" name="p3" value = "b">b. Menu insertar/Nueva diapositiva.<br/>
				<input type="radio" name="p3" value = "c">c. Menu inicio/Nueva diapositiva.<br/>
				

				<h3>4. Como quito los hipervinculos (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Menu animaciones/Sin hipervinculo. <br/>
				<input type="radio" name="p4" value = "b">b.Menu inico/Quitar hipervinculo.<br/>
				<input type="radio" name="p4" value = "c">c. Seleccionas el texto en la web/Copiar/Regresar al documento/Clic derecho/Pegado especial. <br/>
				
				<h3>5. Como agrego un cuadro de texto? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Clic derecho/Agregar texto.<br/>
				<input type="radio" name="p5" value = "b">b. Menu archivo/Insertar texto.<br/>
				<input type="radio" name="p5" value = "c">c. Cualquiera de las dos primeras opciones.<br/>
				<input type="radio" name="p5" value = "d">d. Menu insertar/Cuadro de texto.<br/>

				<h3>6. Dentro de una presentacion de PowerPoint se puede incluir? (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Texto, Video, mapas conceptuales, animaciones e hipervinculos<br/>
				<input type="radio" name="p6" value = "b">b. Texto, Video, mapas conceptuales e animaciones.<br/>
				<input type="radio" name="p6" value = "c">c. Ninguna de las anteriores.<br/>
				

				<h3>7. La opcion a traves del Teclado que nos permite ver la presentacion es la tecla F3 (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Verdadero<br/>
				<input type="radio" name="p7" value = "b">b. Falso<br/>
				

				<h3>8. Cuando deseamos incluir una imagen en el fondo de una diapositiva que permita ver el texto por encima de ella sin moverse empleamos la opcion. (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Traer al frente.<br/>
				<input type="radio" name="p8" value = "b">b. Enviar al fondo.<br/>
				<input type="radio" name="p8" value = "c">c. Efecto de Relleno Imagen.<br/>

				
				<h3>9. Efectos que se aplican al cambio de una diapositiva a otra; ejemplos panal, ondulacion y galeria:(1PT)</h3>

				<input type="radio" name="p9" value = "a">a. WordArt.<br/>
				<input type="radio" name="p9" value = "b">b. Formas.<br/>
				<input type="radio" name="p9" value = "c">c. Transiciones.<br/>

				<h3>10. Los Siguientes Efectos de relleno, Color Solido, Degradado, Trama, Textura e Imagen, son los que se pueden aplicar a las Diapositivas. (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. Verdadero.<br/>
				<input type="radio" name="p10" value = "b">b. Falso.<br/>

				<h3>11.Como se les llama a las paginas en Power Point? (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Hojas.<br/>
				<input type="radio" name="p11" value = "b">b. Diapositivas.<br/>
				<input type="radio" name="p11" value = "c">c. Paginas.<br/>

				<h3>12. Cuando hablamos de insertar imagenes, hablamos exclusivamente de incluir fotografias realizadas por una camara digital (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Verdadero.<br/>
				<input type="radio" name="p12" value = "b">b. Falso.<br/>
				
				<h3>13. Microsoft Office Power Point pertence a: (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Software ofimatico.<br/>
				<input type="radio" name="p13" value = "b">b. Software programacion.<br/>
				<input type="radio" name="p13" value = "c">c. Software diapositivas.<br/>

				<h3>14. El elemento que muestra todas las diapositivas creadas hasta el momento es: (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Boton de inicio.<br/>
				<input type="radio" name="p14" value = "b">b. Panel de diapositivas.<br/>
				<input type="radio" name="p14" value = "c">c. Boton de office.<br/>
				

				<h3>15.  La barra que permite visualizar el nombre de archivo de presentacion es:(1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Barra de titulo.<br/>
				<input type="radio" name="p15" value = "b">b. Barra de nombre.<br/>
				<input type="radio" name="p15" value = "c">c. Barra de notas.<br/>
				
				<h3>16.  Podemos agregar y/o eliminar diapositivas (1PT)</h3>
				<input type="radio" name="p16" value = "a">a. Dando clic en el boton de office, opcion nuevo diapositiva.<br/>
				<input type="radio" name="p16" value = "b">b. Dando clic en Menu inicio, en el grupo de herramientas de Diapositivas.<br/>
				<input type="radio" name="p16" value = "c">c.  Dando clic derecho en una diapositiva del panel de diapositivas.<br/>

				<h3>17. Que es una Transicion? </h3>
				<input type="radio" name="p17" value = "a">a. Es el paso de una diapositiva a otra.<br/>
				<input type="radio" name="p17" value = "b">b. Son efectos que aplicamos a las diapositivas.<br/>
				<input type="radio" name="p17" value = "c">c. Son efectos de movimiento que se ven a medida que avanzas entre diapositiva y diapositiva.<br/>

				<h3>18.  Para agregar un cuadro de texto a la presentacion (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Ficha Insertar, Clic en cuadro de texto<br/>
				<input type="radio" name="p18" value = "b">b. Ficha Inicio, Clic en Cuadro de Texto<br/>
				<input type="radio" name="p18" value = "c">c. Ficha formas, Clic en Cuadro de Texto<br/>

				<h3>19. La barra de titulo muestra el nombre del programa y el nombre de la presentacion actual. (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Verdadero.<br/>
				<input type="radio" name="p19" value = "b">b. Falso.<br/>
				

				<h3>20. La vista normal muestra una vision global de las diapositivas que forman nuestra presentacion. (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Verdadero<br/>
				<input type="radio" name="p20" value = "b">b. Falso<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	<script src="js/script.js"></script>
</body>


</html>