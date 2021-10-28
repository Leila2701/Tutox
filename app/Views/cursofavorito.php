<?php
 $dato=$datos->v1;
 $dato2=$datos->v2;
 $dato3=$datos->v3;
 $dato4=$datos->v4;
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/resources/img/t.ico">
    <title>Tutox - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
         <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>/resources/css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary" style="background-image: radial-gradient(circle, #ffffff, #f0f2f9, #dde7f2, #c6dde9, #aed3dc);">
 <script src ="<?=base_url()?>/resources/js/jsCursoFavorito.js"> </script>
    <script> 
      ruta='<?= base_url ()?>';
      $(document).ready(function(){resgitrarMatricula();
      });
    </script>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12" >
                              <div class="col-lg-12">
                                <div class="p-5">
                                  <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Agregar Curso Favorito</h1>
                                  </div>  
                                </div>
                                <div class="alert alert-danger"  id="error" >
                                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                  <span class="sr-only">Error:</span>
                                  <p id="mensaje_error"></p>
                                </div>        
                            <div class="alert alert-success"  id="succ" >
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                <span class="sr-only">Correcto:</span>
                                <p id="mensaje_ok"></p>
                            </div> 
                      
                           <?php $validation = \Config\Services::validation(); ?>

                               <?= form_open('#', array('id' => 'frmreg','name' => 'frmreg')) ?>                   
                                     <?php 
                    $session = \Config\Services::session(); 
                     if($session->has('iduser')){
                       ?>  
                        <input type="text"  id="idper" hidden="" name="idper" value="<?php echo $session->get('email') ?>">
                         <?php }
                ?>
                                    <div class="form-group">
                                        <input type="text" hidden=""class="form-control form-control-user"
                                         id="idcurso" aria-describedby="emailHelp" name="idcurso" value="<?php echo $dato;?>" 
                                         placeholder="codigocurso">
                                    </div>
                                   
                                  
                                
                                        <div class="form-group">
                                          
                                        <input type="text" class="form-control form-control-user"
                                         id="exampleInputEmail" aria-describedby="emailHelp" name="user" value="<?php echo $dato4;?>" 
                                         placeholder="codigocurso">
                                    </div>
                                    <img src="<?php echo base_url();?>/resources/img/<?php echo $dato3?>">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                          <input type="checkbox" class="custom-control-input" id="customCheck">
                                          
                                        </div>
                                    </div>
                                    
                                     <button class="btn btn-lg btn-primary btn-block" type="submit">FAVORITOS</button>
                                       
                                         <?= form_close(); ?>     
                                    <br>
                                    <br>
                              
                                 
                                      
                              
                                       

                                    
                                  
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

  

    <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>