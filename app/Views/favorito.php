
<script type="text/javascript">
    function confirmacion()
    {
        var respuesta=confirm("Estas seguro de Eliminar de Tus Favoritos?");
        if(respuesta==true)
        {
          
            return true;
        }else{
            return false;
        }
    }
</script>  

<br>

    <h2 style="color:#0B6470;font-weight: bold;text-align: center;">CURSOS FAVORITOS</h2>
                       
 <div class="container mt-3">
        <div class="row">
            <?php  foreach ($datos as $row){?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                    <?php $validation = \Config\Services::validation(); ?>
                      <form class="form-signin" action="<?php echo base_url();?>/CursoFavorito/EliminarCurso">
                      <?php 
                    $session = \Config\Services::session(); 
                     if($session->has('iduser')){
                       ?>  
                        <input type="text"  hidden="" id="idper"  name="idper" value="<?php echo $session->get('email') ?>">
                         <?php }
                ?>
                        <input type="text" hidden="" id="idcurso" name="idcurso" value="<?php echo $row['v2'] ; ?>">

                        <img src="<?php echo base_url();?>/resources/img/<?php echo $row['v6']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['v5'] ; ?></h5>
                        <div class=" ">
                            <a href="<?php echo  base_url()?>/<?php echo $row['v7']?>/index " class="btn btn-primary">Ingresar</a>
                               <button class="btn btn-danger" onclick="return confirmacion()">Eliminar</button>
                                 
                            </div>
                        </div>
                        
                    </div>
                </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>












