  <?php
    include '../top.php'; 
  ?>

  <?php
    // Datos 
    $tpb = "Demo: Como Convertir un Array a un Archivo CSV en PHP";
    $pb = "https://blog.nubecolectiva.com/como-convertir-un-array-a-un-archivo-csv-en-php/";
    $gh = "https://github.com/collectivecloudperu/convertir_array_a_csv_en_php/";
  ?>

  <title><?php echo $tpb ?></title>

  <style type="text/css">
    .ghbmd {
      /* display: none!important; */
    }

  </style>

  <?php
    include '../topb.php'; 
  ?>

  <?php
    include '../pub.php'; 
  ?>

    <main role="main">

        <div class="container mt-5">

          <!-- Contenido -->

          <div class="row text-center" >

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4"><?php echo $tpb ?> </h1>

                <div class="fad text-center">
                  <?php
                    include '../fad.php'; 
                  ?> 
                </div>

                <?php
                  include '../mbtodt.php'; 
                ?>                

            </div>

          </div> 

          <div class="row" align="left">

            <div class="col-md-10">

              <p>"Llena los campos del formulario para generar el archivo CSV"</p> 

              <form action="cacsv.php" method="post">  

                <div class="form-group">
                  <label for="nombre" class="negrita2">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
                </div>

                <div class="form-group">
                  <label for="precio" class="negrita2">Precio</label>
                  <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio" required>
                </div>

                <div class="form-group">
                  <label for="stock" class="negrita2">Stock</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingresa el stock" required>
                </div>

                <button type="submit" class="btn btn-primary">Generar CSV</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>

              </form> 

              <br><br> 

              <!-- Mensaje -->

    		      <?php

    		        if ( isset($_GET['estado']) && $_GET['estado'] == 1 )
    		        {
    		            echo "<div class='alert alert-success' role='alert'>Archivo CSV Creado Satisfactoriamente !
                      </div>";

    		            echo "Descargar: <a href=archivo.csv>archivo.csv</a>";
    		        }          

    		      ?>  
              
            </div>

            <div class="col-md-2 mtga">

              <?php
                include '../pub2.php'; 
              ?>
              
            </div>

            
          </div> 

          <!-- Fin Contenido -->     

          <?php
           include '../hab.php'; 
          ?>           
          
        </div>

    </main>


    <?php
      include '../bottom.php'; 
    ?>

    
  </body>
</html>
