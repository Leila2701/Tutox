function listarcursos() {
 $("#reporte").html("");
 $.ajax({
  url: ruta+"/Portada/doListCursoDestacado",
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

 $("#reporte2").html("");
 $.ajax({
  url: ruta+"/Portada/doListCursoNuevo",
  type: 'post',
  dataType: 'json',
  data: {},
  success: function(e){  
    $("#paneltabla2").show();
    $("#reporte2").html(e.data);
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