function doaction(){ 

  $("#error").hide();
  $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg2').submit(function() {

    $("#error").hide();
    $("#succ").hide();
    var formData= new FormData($('#frmreg2')[0]);
    $.ajax({
      url: ruta+"/Illustrator/doSave",
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
          $("#succ").hide(1000);
          
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
  } );

  $("#btn_mostrar").click(function() {
   $("#reporte").html("");
   $.ajax({
    url: ruta+"/Illustrator/doList",
    type: 'post',
    dataType: 'json',
    data: {},
    success: function(e){  
      $("#paneltabla2").show();
      $("#reporte").html(e.data);
         $("#mensaje_ok").html(e.ok);   
       $('#frmreg2')[0].reset();
          $("#succ").hide(1000);
     location.href="../Illustrator/index"; 

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

function listarcomentario() {
 $("#reporte").html("");
 $.ajax({
  url: ruta+"/Illustrator/doList",
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
  url: ruta+"/Illustrator/doList2",
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

