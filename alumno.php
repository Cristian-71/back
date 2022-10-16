<?php 
include("conexion.php"); 
$con = conectar();
$sql = "select * from alumno"; 
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1>Formulario Alumno</h1>
   <div class="container mt-5">
    
    <div class="row">
        <form action="" method="get">
        <div class="mb-3">
                <label for="name">Nombre *</label>
                <br>
                <input type="text" id="name" name="user_name" placeholder="Ej: Cesar">
            </div>
            <div class="mb-3">
                <label for="lastname">Apellido *</label>
                <br>
                <input type="text" id="lastname" name="user_lastname" placeholder="Ej: Ávila">
            </div>
            <div class="mb-3">
                <label for="direction">Direccion *</label>
                <br>
                <input type="text" id="direction" name="user_direction" placeholder="Ej: Av. Los Angeles 1290">
            </div>

            <div class="mb-3">
            <label for="phone">Ingrese numero de telefono</label><br>
            <input type="tel" id="phone" name="user_phone" placeholder="+549-15-206-1566">
            </div>

            <div class="mb-3">
                <label for="edad">Ingrese Edad *</label>
                <br>
                <input type="number" id="age" name="user_age" placeholder="Ej: 34">
            </div>

    
            <input type="submit" value="registrar">


        </form>

    </div>


   </div>

</body>
</html>