<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/excel.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsDesignExamen.js"></script>
	<div id="container">
		<header>
			
			<h1> Examen de InDesign</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Cuando necesito crear el mismo diseño en todas mis páginas utiliza la opción... (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Paginas muestrales<br/>
				<input type="radio" name="p1" value = "b">b. Paginas maestras<br/>
				<input type="radio" name="p1" value = "c">c. Paginas profesionales<br/>


				<h3>2. Quien dibuja trazos en forma libre........ (1PT)</h3>
				<input type="radio" name="p2" value = "a">a. Herramienta lapiz <br/>
				<input type="radio" name="p2" value = "b">b. Herramienta Selección<br/>
				<input type="radio" name="p2" value = "c">c. Herramienta Pluma<br/>
				

				<h3>3. Para que sirve Indesign?  (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Para maquear<br/>
				<input type="radio" name="p3" value = "b">b. Para diseñar<br/>
				
				

				<h3>4. La opcion llenar con texto falso lo encontramo0s en el menu  (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. Archivo <br/>
				<input type="radio" name="p4" value = "b">b. Texto<br/>
				<input type="radio" name="p4" value = "c">c. Maquetacion<br/>
				
				
				<h3>5. La herramienta seleccionar permite realizar varias operaciones  (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Veradero<br/>
				<input type="radio" name="p5" value = "b">b. Falso<br/>

				<h3>6. Al aumentar un grafico vectorial... (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Se produce el efecto "dientes de sierra"<br/>
				<input type="radio" name="p6" value = "b">b. No podemos aumentarlo, pero si seleccionar sus elementos<br/>
				<input type="radio" name="p6" value = "c">c. No pierde calidad<br/>
				

				<h3>7. La herramienta convertir punto de direccion modifica ...(1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Los puntos negro <br/>
				<input type="radio" name="p7" value = "b">b. Los puntos de anclaje de trazados<br/>
				

				<h3>8. Al crear un nuevo documento... (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Debemos elegir cuidadosamente el tipo de perfil, pues no podremos cambiarlo.<br/>
				<input type="radio" name="p8" value = "b">b. Elegiremos el perfil que mas se ajuste a nuestras necesidades<br/>
				<input type="radio" name="p8" value = "c">c. Debemos de configurar todos los aspectos del perfil elegido<br/>

				
				<h3>9. Quien sirve para seleccionar colores de relleno y de trazo
				<input type="radio" name="p9" value = "a">a. Colores <br/>
				<input type="radio" name="p9" value = "b">b. Trazos<br/>
				<input type="radio" name="p9" value = "c">c. Selector de color<br/>

				<h3>10. La herramienta pluma crea trazos ........... y ........ (1PT)</h3>
				<input type="radio" name="p10" value = "a">a. Rectos-Curvos<br/>
				<input type="radio" name="p10" value = "b">b. Ovalados-Rectos<br/>

				<h3>11. Cual de estas afirmaciones sobre archivos enlazados no es cierta? (1PT)</h3>
				<input type="radio" name="p11" value = "a">a.  Al enlazar un PDF, podemos elegir que se muestre solo la ultima pagina<br/>
				<input type="radio" name="p11" value = "b">b. Si creamos un GIF a partir de un documento con archivos enlazados y los modificamos, se actualiza el archivo GIF.<br/>

				<h3>12. Para empezar a  trabajar debo dar clic a la opcion 
 				(1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Abir<br/>
				<input type="radio" name="p12" value = "b">b. documento<br/>
				
				<h3>13. La herramienta poligono (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Permite crear figuras rectangulares <br/>
				<input type="radio" name="p13" value = "b">b. Permite crear figuras elipticas <br/>
				<input type="radio" name="p13" value = "c">c. Permite crear una figura de multiples lados <br/>

				<h3>14. Para que solo se muestre un area concreta de un objeto se utilizara:(1PT)</h3>
				<input type="radio" name="p14" value = "a">a. La herramienta Cuchilla.<br/>
				<input type="radio" name="p14" value = "b">b. Una mascara de recorte.<br/>
				<input type="radio" name="p14" value = "c">c. Las opciones del panel Alinear.<br/>
				

				<h3>15.Cuales son los modelos de tipografia? (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Adobe Photoshop<br/>
				<input type="radio" name="p15" value = "b">b. Adobe Illustrator<br/>
				
				<h3>16.  Cuantos caracteres como maximo es necesario para la redaccion de un titular de redaccion(1PT)</h3>

				<input type="radio" name="p16" value = "a">a. 90 caracteres<br/>
				<input type="radio" name="p16" value = "b">b. 120 caracteres<br/>
				

				<h3>17. Cuando envío una tipografía a la imprenta, esta debe de estar convertida en vector.</h3>
				<input type="radio" name="p17" value = "a">a. Verdadero<br/>
				<input type="radio" name="p17" value = "b">b. Falso<br/>

				<h3>18. Es posible inmovilizar celdas o filas para una mejor vision de la informacion en una tabla (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Cuales son sus modelos de tipografia (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Verdana y Arial<br/>
				<input type="radio" name="p19" value = "b">b. Tahoma y Helvetica<br/>
				


				

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