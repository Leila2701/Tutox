
<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
	<link href="<?php echo base_url();?>/resources/css/examenfacebook.css" rel="stylesheet">
	<link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
	<script src="<?= base_url()?>/resources/js/jsFacebookExamen.js"></script>

	<div id="container">
		<header>
			
			<h1> Examen de Facebook</h1>
			<p>Responde las siguientes preguntas:</p>
		</header>
		<section>
			<div id="resultado"></div>
			<form name ="Examen" onsubmit= "return verificarRespuestas()"> 

				<h3>1. Fan Page es un espacio para compartir informacion de tu empresa? (1PT)</h3>
				<input type="radio" name="p1" value = "a">a. Verdadero<br/>
				<input type="radio" name="p1" value = "b">b. Falso<br/>
				


				<h3>2. Para que sirve un Fan Page? (1PT) </h3>
				<input type="radio" name="p2" value = "a">a. Poder llegar a mas personas a travez de la publicidad <br/>
				<input type="radio" name="p2" value = "b">b. Ser popular<br/>
				<input type="radio" name="p2" value = "c">c. Tener seguidores<br/>
				

				<h3>3. Tipos de pagina de facebook? (1PT)</h3>

				<input type="radio" name="p3" value = "a">a. Empresa o Ventas<br/>
				<input type="radio" name="p3" value = "b">b. Empresa o Comunidad <br/>
				
				

				<h3>4. Se puede promocionar anuncios en facebook? (1PT)</h3>
				<input type="radio" name="p4" value = "a">a. no se<br/>
				<input type="radio" name="p4" value = "b">b. Falso<br/>
				<input type="radio" name="p4" value = "c">c. Verdadero<br/>

				
				
				<h3>5. La herramienta de pagina de Facebook cuenta con estadisticas de vistas? (1PT)</h3>
				<input type="radio" name="p5" value = "a">a. Verdadero<br/>
				<input type="radio" name="p5" value = "b">b. Falso<br/>
				<input type="radio" name="p5" value = "c">c. no se sabe <br/>


				<h3>6. Se puede añadir botones a la Fanfage para que lo susuarios interactuen (1PT)</h3>
				<input type="radio" name="p6" value = "a">a. Verdadero<br/>
				<input type="radio" name="p6" value = "b">b. Falso<br/>

				

				<h3>7. Se puede configurar los mensajes automaticas en un  Fanpage? (1PT)</h3>
				<input type="radio" name="p7" value = "a">a. Falso"<br/>
				<input type="radio" name="p7" value = "b">b. Verdadero"<br/>
				

				<h3>8. Se puede establecer un horario de atencion en la informacion de la fan page (1PT)</h3>
				<input type="radio" name="p8" value = "a">a. Falso<br/>
				<input type="radio" name="p8" value = "b">b. Verdadero<br/>
				

				
				<h3>9. Donde se ven los fans que les gusta tu pagina (1PT)</h3>

				<input type="radio" name="p9" value = "a">a. Roles de pagina<br/>
				<input type="radio" name="p9" value = "b">b. Audiencia preferida de la pagina<br/>
				<input type="radio" name="p9" value = "c">c. Personas y otras paginas<br/>

				<h3>10. Se puede restringir la edad de los seguidores (1PT)</h3>

				<input type="radio" name="p10" value = "a">a. Falso<br/>
				<input type="radio" name="p10" value = "b">b. Verdadero<br/>

				<h3>11. Por que colocar mas administradores del fan page (1PT)</h3>
				<input type="radio" name="p11" value = "a">a. Menos error al publicar<br/>
				<input type="radio" name="p11" value = "b">b. Mayor seguridad<br/>
				<input type="radio" name="p11" value = "c">c. Aumenta problabilidad de recuperar contraseñas y contenidos<br/>
				

				<h3>12. Hay multiples roles para otrogar a otro administrador (1PT)</h3>
				<input type="radio" name="p12" value = "a">a. Falso<br/>
				<input type="radio" name="p12" value = "b">b. Verdadero<br/>
				
				<h3>13. Se puede programar las publicaciones de las fan page de facebook (1PT)</h3>
				<input type="radio" name="p13" value = "a">a. Verdadero<br/>
				<input type="radio" name="p13" value = "b">b. Falso<br/>
				
				
				<h3>14. Se puede ordenar las fotos y videos de conetenido (1PT)</h3>
				<input type="radio" name="p14" value = "a">a. Verdadero<br/>
				<input type="radio" name="p14" value = "b">b. Falso<br/>
				
				<h3>15. Se puede crear lista de reproduccion en el fanpage (1PT)</h3>
				<input type="radio" name="p15" value = "a">a. Verdadero<br/>
				<input type="radio" name="p15" value = "b">b. Falso<br/>
				
				
				<h3>16. Que es un grupo de facebook (1PT)</h3>

				<input type="radio" name="p16" value = "a">a. Es como un foro, donde participan mienbros y hablan de un mismo tema en comun <br/>
				<input type="radio" name="p16" value = "b">b. Es un conjunto de personas<br/>
				<input type="radio" name="p16" value = "c">c. Son personas con un mismo interes<br/>
				

				<h3>17. Al crear un grupo que opcion puedes elegir para compartir (1PT)</h3>
				<input type="radio" name="p17" value = "a">a. Privado, publico, amigos<br/>
				<input type="radio" name="p17" value = "b">b. Publico y privado<br/>
				<input type="radio" name="p17" value = "c">c. Publico<br/>

				<h3>18. se pueden vincular y unir los grupos (1PT)</h3>

				<input type="radio" name="p18" value = "a">a. Verdadero<br/>
				<input type="radio" name="p18" value = "b">b. Falso<br/>
				

				<h3>19. Cuales son los cargos en un grupo (1PT)</h3>
				<input type="radio" name="p19" value = "a">a. Administrador y moderador<br/>
				<input type="radio" name="p19" value = "b">b. Administrador y diseñador<br/>
				<input type="radio" name="p19" value = "c">c. Moderador y Usuario<br/>
				
				

				<h3>20. Se puede vincular la pagina de facebook con instragran (1PT)</h3>
				<input type="radio" name="p20" value = "a">a. Falso<br/>
				<input type="radio" name="p20" value = "b">b. Verdadero<br/>
				

				<input type="submit" value="Enviar">

			</form>

		</section>
	</div>
	
</body>


</html>