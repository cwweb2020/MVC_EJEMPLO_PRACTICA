
<?php 
       include 'Views/header.php';
?>


    <!-- ...hero... -->
    <section class="hero">
        
    <div class="heroLeft d-flex flex-column align-items-start p-5 text-white">  
      
         <h2 class="pt-3">Learn Spanish or</h2>
          <h2 class=""> English,</h2>
          <h2 class="abajo">whenever, wherever.</h2>
        
         <!-- <img src="https://firebasestorage.googleapis.com/v0/b/cereales-ebbb8.appspot.com/o/hola.png?alt=media&token=0926e411-38dd-4d6b-b8e3-20af1615bd2e" alt="hola"> -->
             <a href="#" class="btn btn-light _boton d-flex justify-content-center align-items-center">Knnow More</a>
     </div>
         <div class="herowrap">
             <img src="https://firebasestorage.googleapis.com/v0/b/cereales-ebbb8.appspot.com/o/learn.jpg?alt=media&token=92f0f028-9848-416e-b7b1-89920a2c153a" alt="">

             <div class="overlay"></div>
         </div>
    
   </section>


   
 <!-- ...hero... -->

     <!-- INFO RAPIDA -->
     <section class="info_rapida">
         <div class="info_container">
          
             <div class="box box2">
             <span><img src="./img/certif.png" alt=""></span>
                <h3>titulo</h3>
                <p>All our Spanish and English teachers</p>
                <p>are university trained and have</p>
                <p>experience teaching both online and offline</p>
            </div>
            <div class="box box3">
            <span><img src="./img/oneone.png" alt=""></span>
                <h3>titulo</h3>
                <p>All our Spanish and English teachers</p>
                <p>are university trained and have</p>
                <p>experience teaching both online and offline</p>
            </div>
            <div class="box box4">
            <span><img src="./img/star.png" alt=""></span>
                <h3>titulo</h3>
                <p>All our Spanish and English teachers</p>
                <p>are university trained and have</p>
                <p>experience teaching both online and offline</p>
            </div>
            <div class="box box5">
            <span><img src="./img/world.png" alt=""></span>
                <h3>titulo</h3>
                <p>All our Spanish and English teachers</p>
                <p>are university trained and have</p>
                <p>experience teaching both online and offline</p>
            </div>
             
         </div>
     </section>

     <!-- INFO RAPIDA -->
          <!-- separador< -->
          <!-- <div class="_separador">
             <hr>
         </div> -->

        <!-- COMPARACION   -->
    <div class="comparacion">
        <div class="comparacion_wraper">
             <div class="cajaswrap"><img src="./img/aburrida.jpg" alt="aburrida"></div>
             <div class="cajaswrap cajaswrap_p">
                 <p>Still using that old boring way?</p>
                
            </div>
            <div class="cajaswrap cajaswrap_p flex-column">
                 <p class="p5">Learn faster with native speakers and have fun while you learn.</p>
                   <a href="#" class="btn btn-light align-items-center d-flex justify-content-center">Our Courses</a>
            </div>
             <div class="cajaswrap"><img src="./img/divertida.jpg" alt="divertida" class="divertida"></div>
             
        </div>
    </div>
        <!-- COMPARACION   -->

   <!-- muestra de autos tabla -->

   <section class="tablaTotal p-5 my-5">
   <h2 class="mb-5 pb-4 text-center"> <?php echo  $data['titulo']?> </h2>

   <a href="#" class="btn btn-dark">Agregar Vehiculo</a>
        
   <table class="table table-striped w-50 m-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Placa</th>
      <th scope="col">Año</th>
      <th scope="col">Color</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
  
    foreach( $data['vehiculos'] as $auto )  : ?> 
    <tr>
      <th scope="row"> <?php  echo  $auto['id'] ?> </th>
    
 
         <td> <?php echo $auto['marca'] ?>  </td>
         <td> <?php echo $auto['modelo'] ?>  </td>
         <td> <?php echo $auto['placa'] ?>  </td>
         <td> <?php echo $auto['year'] ?>  </td>
         <td> <?php echo $auto['color'] ?>  </td>
        
       </tr>
         <?php  endforeach ?>

 

  </tbody>
</table>

</section>
    <!-- muestra de autos tabla -->








 
  <script src="./librerias/all.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> 
<script src="app.js"></script>
</body>
</html>