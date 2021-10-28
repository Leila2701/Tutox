<!DOCTYPE html>
<html>
<head>
  <title>Examen</title>
  <link href="<?php echo base_url();?>/resources/css/phtoshop.css" rel="stylesheet">
  <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
</head>
<body style="background: url('<?php echo base_url();?>/resources/img/bg1.jpg');">
  <script src="<?= base_url()?>/resources/js/jsPhotoshopExamen.js"></script>
  <div id="container">
    <header>
      
      <h1> Examen de Photoshop</h1>
      <p>Responde las siguientes preguntas:</p>
    </header>
    <section>
      <div id="resultado"></div>
      <form name ="Examen" onsubmit= "return verificarRespuestas()"> 

        <h3>1. La opcion de "desaturar" nos permite colorear las imagenes en blanco y negro (1PT)</h3>
        <input type="radio" name="p1" value = "a">a. Verdadero<br/>
        <input type="radio" name="p1" value = "b">b. Falso<br/>


        <h3>2. Los pinceles de photoshop solo exdisten de forma redonda y cuadrada (1PT)</h3>
        <input type="radio" name="p2" value = "a">a. Verdadero <br/>
        <input type="radio" name="p2" value = "b">b. Falso<br/>
        

        <h3>3. En el menu de "opciones de fusion" encontramos herramientas para: (1PT)</h3>

        <input type="radio" name="p3" value = "a">a. Aplicar sombras y efectos como "bisel y relieve"<br/>
        <input type="radio" name="p3" value = "b">b. Resaltar y agrandar objetos<br/>
        <input type="radio" name="p3" value = "c">c. Aplicar marcos de colores y tonos brillantes<br/>
        
        

        <h3>4. La herramienta "tamon de clonar" nos permite: (1PT)</h3>
        <input type="radio" name="p4" value = "a">a. Duplicar una  imagen clonada<br/>
        <input type="radio" name="p4" value = "b">b. Borrar los efectos de una imagen recortandola<br/>
        <input type="radio" name="p4" value = "c">c. Igualar una parte de una imagen que queremos reparar o limpiar<br/>
        
        
        <h3>5. Para seleccionar el area especifica de una imagen podemos hacerlo con: (1PT)</h3>
        <input type="radio" name="p5" value = "a">a. Herramienta de seleccion de pixeles<br/>
        <input type="radio" name="p5" value = "b">b. Herramientas copiar y pegar <br/>
        <input type="radio" name="p5" value = "c">c. Herramientas marco rectangular <br/>

        <h3>6. En phtoshop el "borrado magico" nos permite: (1PT)</h3>
        <input type="radio" name="p6" value = "a">a. Borrar espacios grandes de una imagen que poseen colores uniformes <br/>
        <input type="radio" name="p6" value = "b">b. Borrar magicamente cualquier imagen que no se deje borrar <br/>
        <input type="radio" name="p6" value = "c">c. Limpiar imagen que contenga mucha basura <br/>
        

        <h3>7. Al aplicar "Transformacion libre" al texto nos permite: ? (1PT)</h3>
        <input type="radio" name="p7" value = "a">a. Cambiar las dimensiones y tamaños del texto en cualquier direccion<br/>
        <input type="radio" name="p7" value = "b">b. Cambiar el tipo de letra y direccion<br/>
        <input type="radio" name="p7" value = "c">c. Modificar el grosor de las letras <br/>
        

        <h3>8. En Photoshop la ventana de "Navegador" nos permite: (1PT)</h3>
        <input type="radio" name="p8" value = "a">a. Navegar por el menu de opciones y aplicar efectos a las imagenes<br/>
        <input type="radio" name="p8" value = "b">b. Navegar en internet para buscar imagenes e insertarlas <br/>
        <input type="radio" name="p8" value = "c">c. Navegar por la imagen y acercarnos mas para ver detalles de cerca <br/>

        
        <h3>9. Para aplicar una perspectiva al texto es necesario primero rasterizarlo: (1PT)</h3>

        <input type="radio" name="p9" value = "a">a. Verdadero<br/>
        <input type="radio" name="p9" value = "b">b. Falso<br/>

        <h3>10. La opcion en Photoshop "brillo/contraste" se encuentra en el menu ajustes dentro de la pestaña (1PT)</h3>
        <input type="radio" name="p10" value = "a">a. Verdadero<br/>
        <input type="radio" name="p10" value = "b">b. Falso<br/>

        <h3>11. La ventana "Historia" nos permite: (1PT)</h3>
        <input type="radio" name="p11" value = "a">a. Ver los pasos o acciones que hemos aplicado en la imagen <br/>
        <input type="radio" name="p11" value = "b">b. Ver las imagenes que hemos abierto durante una semana<br/>
        <input type="radio" name="p11" value = "c">c. Regresar Photoshop al principio de la instalacion <br/>

        <h3>12. La herramienta "varita magica" nos da la opcion de: (1PT)</h3>
        <input type="radio" name="p12" value = "a">a. Selleccionar el area especifica de una imagen o texto con precision <br/>
        <input type="radio" name="p12" value = "b">b. Dibujar de manera instantanea una forma geometrica<br/>
        
        <h3>13. La herramienta cuenta gotas nos permite: (1PT)</h3>
        <input type="radio" name="p13" value = "a">a. Contar las gotas de colores para hacer un color nuevo personalizado<br/>
        <input type="radio" name="p13" value = "b">b. Iguaar el tono o color dependiendo de la superficie que seleccionamos<br/>
        

        <h3>14. Para abrir una imagen en Photoshop debemos: (1PT)</h3>
        <input type="radio" name="p14" value = "a">a. Arrastarla desde cualquier ubicacion <br/>
        <input type="radio" name="p14" value = "b">b. Abrirla desde un archivo en una carpeta en especifica  <br/>
        <input type="radio" name="p14" value = "c">c. cualquiera de las 2 es correcta<br/>
        

        <h3>15. En Photoshop podemos  cambiar el color de piel con la herramienta: (1PT)</h3>
        <input type="radio" name="p15" value = "a">a. Tono de piel <br/>
        <input type="radio" name="p15" value = "b">b. Efctos de color <br/>
        <input type="radio" name="p15" value = "c">c. Tono/Saturacion <br/>
        
        <h3>16.  En Photoshop la opcion de desaturar esta dentro del menu edicion: (1PT)</h3>

        <input type="radio" name="p16" value = "a">a. Verdadero<br/>
        <input type="radio" name="p16" value = "b">b. Falso<br/>
        

        <h3>17. Photoshop nos permie hacer fotomontajes sobre cualquier tipo de imagen (1PT) </h3>
        <input type="radio" name="p17" value = "a">a. Verdadero<br/>
        <input type="radio" name="p17" value = "b">b. Falso<br/>

        <h3>18. Al oprimir manener proporcion en un imagen o texto nos permite: (1PT)</h3>

        <input type="radio" name="p18" value = "a">a. Mantener los colores de la imagen sin distorcionarlos <br/>
        <input type="radio" name="p18" value = "b">b. Siempre mantener las medidas exactas a medida que agrandamos la imagen   <br/>
        

        <h3>19. Para cambiar el nombre a una hoja de calculo haciendo uso del metodo mas directo y rapido, se deben realizar los siguPhotoshop es un programa para: (1PT)</h3>
        <input type="radio" name="p19" value = "a">a. Hacer doble clic sobre el nombre de la hoja en su etiqueta 2.Escribir el nuevo nombre de la hoja. 3.Pulsar intro<br/>
        <input type="radio" name="p19" value = "b">b. A y B son correctas<br/>
        <input type="radio" name="p19" value = "c">c. Otra<br/>

        

        <h3>20. La opcion capa via copiar nos permite:  (1PT)</h3>
        <input type="radio" name="p20" value = "a">a. Editar imagenes, efectos especilales y fotomontajes <br/>
        <input type="radio" name="p20" value = "b">b. Reemplazar imagenes de internet y dibujar <br/>
        <input type="radio" name="p20" value = "c">c. Modificar videos, hacer mapas y grabar musica<br/>
        

        <input type="submit" value="Enviar">

      </form>

    </section>
  </div>
  <script src="js/script.js"></script>
</body>


</html>