
<?php 
       include 'Views/header.php';
?>


    <!-- ...hero... -->
    <section class="hero">
        
    <div class="heroLeft d-flex flex-column align-items-start p-5 text-white">  
      
         <h2 class="pt-3">Because</h2>
          <h2 class=""> the best experience,</h2>
          <h2 class="abajo">is to comunicate.</h2>
        
         <!-- <img src="https://firebasestorage.googleapis.com/v0/b/cereales-ebbb8.appspot.com/o/hola.png?alt=media&token=0926e411-38dd-4d6b-b8e3-20af1615bd2e" alt="hola"> -->
         <button class="btn btn-light _boton">Know More</button>
     </div>
         <div class="herowrap">
             <img src="https://firebasestorage.googleapis.com/v0/b/cereales-ebbb8.appspot.com/o/x-assuntos-legais-para-conversar-com-amigos-em-qualquer-ocasiao-825x433.jpg?alt=media&token=3d81119d-1707-4d59-8bbf-a0e7f3a44fc7" alt="">

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