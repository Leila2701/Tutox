<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/excel.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsIllustratorExamen.js"></script>
	<div id="container">
		<header>
			
			<h1> Examen de Illustrator</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. No es un panel flotante basico: (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Degrado<br/>
				<input type="radio" name="p1" value = "b">b. Herramientas<br/>
				<input type="radio" name="p1" value = "c">c. Muestras<br/>


				<h3>2. Que son los paneles flotantes? (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Son ventanas que estan sobrepuestas al lienzo y solo muestran la imagen del grafico <br/>
				<input type="radio" name="p2" value = "b">b. Son ventanas que pueden estar sobre el lienzo y nos permite tener acceso a opciones extras para configurar y editar un objeto grafico<br/>
				<input type="radio" name="p2" value = "c">c. Son ventanas de opciones que se muestran cuando damos clic sobre un boton determinado<br/>
				

				<h3>3. Cual es la extension de los archivos de Adobe Ilustrator? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. jpg<br/>
				<input type="radio" name="p3" value = "b">b. Ai<br/>
				
				

				<h3>4. El lienzo es considerado tambien como una: (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Meza de trabajo <br/>
				<input type="radio" name="p4" value = "b">b. Area de trabajo para el dibujo<br/>
				
				
				<h3>5. Adobe Illustrator CS4 solo nos permite trabajar con graficos vectoriales. (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Veradero<br/>
				<input type="radio" name="p5" value = "b">b. Falso<br/>

				<h3>6. Al aumentar un grafico vectorial... (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Se produce el efecto "dientes de sierra"<br/>
				<input type="radio" name="p6" value = "b">b. No podemos aumentarlo, pero si seleccionar sus elementos<br/>
				<input type="radio" name="p6" value = "c">c. No pierde calidad<br/>
				

				<h3>7. Un archivo PNG es...(1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Un mapa de bits.<br/>
				<input type="radio" name="p7" value = "b">b. Un grafico vectorial.<br/>
				

				<h3>8. Al crear un nuevo documento... (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Debemos elegir cuidadosamente el tipo de perfil, pues no podremos cambiarlo.<br/>
				<input type="radio" name="p8" value = "b">b. Elegiremos el perfil que mas se ajuste a nuestras necesidades<br/>
				<input type="radio" name="p8" value = "c">c. Debemos de configurar todos los aspectos del perfil elegido<br/>

				
				<h3>9. Cual de estas afirmaciones sobre Adobe Bridge no es cierta?
				<input type="radio" name="p9" value = "a">a. Sirve para abrir documentos<br/>
				<input type="radio" name="p9" value = "b">b. Sirve para colocar graficos.<br/>
				<input type="radio" name="p9" value = "c">c. Sirve para guardar documentos.<br/>

				<h3>10. Al colocar un archivo... (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. Solo podemos hacerlo si es un mapa de bits o un grafico vectorial.<br/>
				<input type="radio" name="p10" value = "b">b. parece como un objeto en el documento.<br/>

				<h3>11. Cual de estas afirmaciones sobre archivos enlazados no es cierta? (1PT)</h3>
				<input type="radio" name="p11" value = "a">a.  Al enlazar un PDF, podemos elegir que se muestre solo la ultima pagina<br/>
				<input type="radio" name="p11" value = "b">b. Si creamos un GIF a partir de un documento con archivos enlazados y los modificamos, se actualiza el archivo GIF.<br/>

				<h3>12. Si creamos un logo para nuestra Web con formato GIF, que podemos querer modificar en el futuro...
 				(1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Lo mejor es tener instalado un programa de retoque de imagenes, como Photoshop.<br/>
				<input type="radio" name="p12" value = "b">b.  Es mejor guardar el archivo de proyecto de Illustrator (ai)<br/>
				
				<h3>13. Cuales son los modos de color que existen en Illustrator al crear un documento. (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. VColor indexado, RGB<br/>
				<input type="radio" name="p13" value = "b">b. CMYK, Escala de grises<br/>
				

				<h3>14. Para que solo se muestre un area concreta de un objeto se utilizara:(1PT)</h3>
				<input type="radio" name="p14" value = "a">a. La herramienta Cuchilla.<br/>
				<input type="radio" name="p14" value = "b">b. Una mascara de recorte.<br/>
				<input type="radio" name="p14" value = "c">c. Las opciones del panel Alinear.<br/>
				

				<h3>15.Cuando trabajo en una pagina web, el documento debe de estar en modo RGB (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Verdadero<br/>
				<input type="radio" name="p15" value = "b">b. Falso<br/>
				
				<h3>16.  El panel Pathfinder sirve para organizar y alinear los objetos seleccionados.
				 (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Verdadero<br/>
				<input type="radio" name="p16" value = "b">b. Falso<br/>
				

				<h3>17. Cuando envío una tipografía a la imprenta, esta debe de estar convertida en vector.</h3>
				<input type="radio" name="p17" value = "a">a. Verdadero<br/>
				<input type="radio" name="p17" value = "b">b. Falso<br/>

				<h3>18. Es posible inmovilizar celdas o filas para una mejor vision de la informacion en una tabla (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Al agrandar un grafico vectorial, se pixela y pierde su calidad (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Verdaderl<br/>
				<input type="radio" name="p19" value = "b">b. Falso<br/>
				


				

				<h3>20. Al “Expandir apariencia” de un efecto, lo puedo editar en el panel Apariencia. (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Verdadero<br/>
				<input type="radio" name="p20" value = "b">b. Falso <br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	<script src="js/script.js"></script>
</body>


</html>