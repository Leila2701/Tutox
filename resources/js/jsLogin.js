
function doaction(){ 

    $("#error").hide();
   $("#succ").hide();
    $("#paneltabla2").hide();
  
    $('#frmreg').submit(function() {
      $("#error").hide();
     $("#succ").hide();
  
     $.ajax({
      url:  ruta+"/Login/doSaveLogin",
      type: 'post',
      dataType: 'json',
      data: $('#frmreg').serialize(),
      success: function(e){       
       if(e.error==""){
         
        $("#succ").show();
        $("#mensaje_ok").html(e.ok);   
       $('#frmreg')[0].reset();
        $("#succ").hide(6000);  
        location.href="../Portada/index";  
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
  //Cambiar contraseña
  
function doaction2(){ 

  $("#error").hide();
 $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg').submit(function() {
    $("#error").hide();
   $("#succ").hide();

   $.ajax({
    url:  ruta+"/Login/doSaveLoginModificar",
    type: 'post',
    dataType: 'json',
    data: $('#frmreg').serialize(),
    success: function(e){       
     if(e.error==""){
      $("#succ").show();
      $("#mensaje_ok").html(e.ok);   
     $('#frmreg')[0].reset();
      $("#succ").hide(6000);  
    
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
function doaction3(){ 

  $("#error").hide();
 $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg').submit(function() {
    $("#error").hide();
   $("#succ").hide();

   $.ajax({
    url:  ruta+"/Login/doSaveToken",
    type: 'post',
    dataType: 'json',
    data: $('#frmreg').serialize(),
    success: function(e){       
     if(e.error==""){
       
      $("#succ").show();
      $("#mensaje_ok").html(e.ok);   
     $('#frmreg')[0].reset();
      $("#succ").hide(6000); 
      location.href="../cnPersona/validacionrestauracion";  
    
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

function doaction4(){ 

  $("#error").hide();
 $("#succ").hide();
  $("#paneltabla2").hide();

  $('#frmreg').submit(function() {
    $("#error").hide();
   $("#succ").hide();

   $.ajax({
    url:  ruta+"/Login/doSaveClaveToken",
    type: 'post',
    dataType: 'json',
    data: $('#frmreg').serialize(),
    success: function(e){       
     if(e.error==""){
       
      $("#succ").show();
      $("#mensaje_ok").html(e.ok);   
     $('#frmreg')[0].reset();
      $("#succ").hide(6000);  
      location.href="../cnPersona/validacioncontraseña"
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
