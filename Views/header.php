<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title> <?php echo $data['titulo'] ?> </title>
</head>
<body>

<nav class="navbar navbar-dark">
<div class="logo_empresa">
      <h1>Logo Empresa</h1>
    </div>
  <!-- Navbar content -->
   
  <ul>
     <li> <a href="#" class="linkis">About</a></li>
     <li id="submenu" class="position-relative"> <a href="#" class="linkis">Courses</a> <span class="ms-1 _arrow ms-1"><i class="fas fa-sort-down"></i> </span>
        <!-- submenu -->
        <div class="__submenu">
            <a href="#">submenu1</a>
            <a href="#">submenu2</a>
            <a href="#">submenu3</a>
        </div>
    </li>
     <li> <a href="#" class="linkis">Pricing</a></li>
     <li> <a href="#" class="linkis">Contact</a></li>
   
   </ul>
</nav>