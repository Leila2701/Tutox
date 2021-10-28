
<div class="input-group">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
</div>

<table class="table table-hover">
 <thead>
  <tr>
   <th>ID</th>
   <th>Nº</th>
   <th>Canción</th>
   <th>+ (Array)</th> 
   <th>Reproducir</th>
 </tr>
</thead>
<tbody class="buscar">
 <tr>
   <th>ID</th>
   <th>1</th>
   <th>Csss</th>
   <th>+ (Array)</th> 
   <th>Reproducir</th>
 </tr>
 <tr>
   <th>ID</th>
   <th>2</th>
   <th>bbbbb</th>
   <th>+ (Array)</th> 
   <th>Reproducir</th>
 </tr>
</tbody>

</table>
<script>
  $(document).ready(function () {
   
    (function ($) {
     
      $('#filtrar').keyup(function () {
       
       var rex = new RegExp($(this).val(), 'i');
       
       $('.buscar tr').hide();
       
       $('.buscar tr').filter(function () {
         return rex.test($(this).text());
       }).show();
       
     })
      
    }(jQuery));
    
  });
</script>