

<?php 
       include 'Views/header.php';
?>





    <div class="container w-100 d-flex justify-content-center flex-column align-items-center pb-5">       

     <h2 class="pt-5 mt-5 text-center">Ingrese un nuevo vehículo</h2>
<form action="" method="post" class="form-control card m-5 shadow p-3 mb-5 bg-white rounded" style="width: 23.75rem;">
   <h2 class="fs-4">Agregar Vehículo</h2>
     <input type="text" name="marca" class="form-control mt-2 __input" placeholder="Marca" id="inPut" required><br>

     <input type="text" name="modelo" class="form-control mt-2 __input" placeholder="Modelo" id="inPut" required><br>

     <input type="text" name="placa" class="form-control mt-2 __input" placeholder="Placa" id="inPut" required><br>

 <input type="number" name="year" class="form-control mt-2 __input" placeholder="Año" id="inPut" required><br>

     <input type="text" name="color" class="form-control mt-2 __input" placeholder="Color" id="inPut" required><br>
  
    <input type="submit" value="Enviar" class="btn btn-dark" id="btn">
</form>

</div>










<script src="app.js"></script>
</body>
</html>