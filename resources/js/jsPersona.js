
function doaction(){ 

  $("#error").hide();
  $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg').submit(function() {
    $("#error").hide();
   $("#succ").hide();

   $.ajax({
    url:  ruta+"/cnPersona/doSavePersona",
    type: 'post',
    dataType: 'json',
    data: $('#frmreg').serialize(),
    success: function(e){       
     if(e.error==""){
      $("#succ").show();
      $("#mensaje_ok").html(e.ok);   
      $('#frmreg')[0].reset();
      $("#succ").hide(6000);
      location.href="../cnPersona/validacionregistro";  
    }else{
      $("#error").show();
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

  $("#btn_mostrar").click(function() {
    $("#paneltabla2").hide();
    $.ajax({
      url: ruta+"/Portada/doList",
      type: 'post',
      dataType: 'json',
      data: {},
      success: function(e){  
        if (e.data.length>0){
          $("#paneltabla2").show();
          $(function () {
            $('#table').bootstrapTable({
             data: e.data
           });
            $('#table').bootstrapTable('hideColumn', 'v1');      
          });
        }
        else{
         alert("No hay Registros");
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
    
  });


}

function doaction2(){ 

  $("#error").hide();
  $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg2').submit(function() {
    $("#error").hide();
   $("#succ").hide();
   var formData= new FormData($('#frmreg2')[0]);
   $.ajax({
    url:  ruta+"/cnPersona/doSaveModificarDatos",
    type: 'post',
    dataType: 'json',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,      
    success: function(e){       
     if(e.error==""){
      $("#succ").show();
      $("#mensaje_ok").html(e.ok);   
      $('#frmreg2')[0].reset();
      $("#succ").hide(6000);
      $("#reporte").html("");  

    }else{
      $("#error").show();
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
}