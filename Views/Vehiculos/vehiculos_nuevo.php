

<?php 
       include 'Views/header.php';
?>





    <div class="container w-100 d-flex justify-content-center flex-column align-items-center pb-5">       

     <h2 class="pt-5 mt-5 text-center">Ingrese un nuevo vehículo</h2>
  <!-- FORUMULARIO -->
<form action="index.php?c=vehiculos&a=guarda" name="nuevo" class="form-control card m-5 shadow p-3 mb-5 bg-white rounded" style="width: 23.75rem;" id="formulario">

   <h2 class="fs-4 my-3 text-center">Agregar vehículo </h2>
     <input type="text" name="marca" class="form-control mt-2 __input" placeholder="Marca" id="inPut" required><br>

     <input type="text" name="modelo" class="form-control mt-2 __input" placeholder="Modelo" id="inPut" required><br>

     <input type="text" name="placa" class="form-control mt-2 __input" placeholder="Placa" id="inPut" required><br>

 <input type="number" name="year" class="form-control mt-2 __input" placeholder="Año" id="inPut" required><br>

     <input type="text" name="color" class="form-control mt-2 __input" placeholder="Color" id="inPut" required><br>
  
     <button type="submit" class="btn btn-dark" id="_enviar">Guardar</button>
</form>

</div> 

<script>
  $('#_enviar').click(function (e) { 

    $.ajax({
     type: "post",
     url: "./controllers/vehiculos.php",
     data: $('#formulario').serialize(),
     success: function (response) {
       console.log('enviado');
     }
   });

   });
 
</script>








<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="./librerias/all.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> 
<script src="app.js"></script>
</body>
</html>