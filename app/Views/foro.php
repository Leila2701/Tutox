

    <div class="foroBloque">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 barraPaginacion foroModulo foroMargen">
        <a href="#">Inicio</a><!--  <i class="fa fa-chevron-circle-right paginationArrow"></i><a href="#">Categoria</a><i class="fa fa-chevron-circle-right paginationArrow"></i><a href="#">Discusion</a>-->
      </div>  
    </div>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--> 
    <div id="category_1" class="row foroModulo foroMargen">
      <a href="#" onclick="showDiscussions(1);"><!--Llamara a un archivo php -->
        <div class="col-lg-12 columnaRelleno">
          <div class="colocarIzquierda"> 
            <h1>WORD </h1> 
          </div>
          <div class="colocarDerecha">
            <a id="starDiscussionsButton_1" class="btn btn-primary botonTema" href="#" onclick="starDiscussions(1);">Comentar</a>
          </div>
        </div>
      </a>
    </div>

    <div id=cat_new_discussions_1 class="row foroRelleno" style="display:none;"> 
      <div class="col-lg-12">
        <Div>
          <a  class="btn btn-primary botonTema" href="#" >Guardar</a>
        </Div>
        <form>
          <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="newDiscussionsTitle" class="form-control "size="40">
            <br/>
            <label>Contenido</label>
            <textarea class="newDiscussionText form-control" name="newDiscussionText" rows="10"></textarea>
          </div>
        </form>
      </div>
    </div>  

      <div id="cat_discussions_1" class="row foroRelleno" style="display:none;"><!--esto llamara a la categoria discusion 1 oculto con javascript lo llamamos-->
        <div class="col-lg-12">
          <table class="foroTabla">
            <thead>
              <th>
                Discucion
              </th>
              <th>
                Autor
              </th>
              <th class="colocarDerecha">
                Respuestas
              </th>
            </thead>

            <tr class="foroModulo">
              <td>
                <a href="#">Esta es mi primi discusion</a>
              </td>
              <td>
                <a href="#">Nelson</a>
              </td>
              <td class="colocarDerecha">
                1
              </td>
            </tr>

            <tr class="foroModulo">
              <td>
                <a href="#">Esta es mi secund discusion</a>
              </td>
              <td>
                <a href="#">Nelson</a>
              </td>
              <td class="colocarDerecha">
                1
              </td>
            </tr>
          </table>
        </div>
      </div>
      
      
      <dir class="row">
        <div class="col-lg-12">
          <div class="colocarDerecha" style="padding-right: 15px;">
            <a class="label label-primary" href="#">Ver mas</a>
          </div>
        </div>
      </dir>

      </div>

