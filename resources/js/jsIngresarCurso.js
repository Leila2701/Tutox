function doaction(){ 

  $("#error2").hide();
  $("#succ2").hide();
  $("#paneltabla2").hide();

  $('#frmreg2').submit(function() {
    $("#error2").hide();
   $("#succ2").hide();
   var formData= new FormData($('#frmreg2')[0]);
   $.ajax({
    url:  ruta+"/IngresarCurso/doSave",
    type: 'post',
    dataType: 'json',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,      
    success: function(e){       
     if(e.error==""){
      $("#succ2").show();
      $("#mensaje_ok").html(e.ok);   
      $('#frmreg2')[0].reset();
      $("#succ2").hide(6000);
      $("#reporte").html("");  

    }else{
      $("#error2").show();
      $("#mensaje_error").html(e.error);
    }
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
   return false;
   /* Act on the event */
 });

  $("#btn_mostrar2").click(function() {
    $("#reporte").html("");
    $.ajax({
      url: ruta+"/IngresarCurso/doList",
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
    
  });


}