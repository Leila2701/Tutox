function listarcurso() {
   $("#reporte").html("");
  $.ajax({
    url: ruta+"/Curso/doList",
    type: 'post',
    dataType: 'json',
    data: {},
    success: function(e){  
      $("#paneltabla2").show();
      $("#reporte").html(e.data);
    }
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });

}
