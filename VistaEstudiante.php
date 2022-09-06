<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align: center; 
        }
    </style>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <div class="container">
    <form action="EstudianteController.php" method="post" class="mt-3">
        
        <div class="row mb-4" >
            <label class="col-2 col-form-label" for="apellidos">Apellidos</label> 
            <div class="col-10">
                <input type="text" name="apellidos" class="form-control">
            </div>       
         </div>
        
        <div class="row mb-4">
            <label class="col-2 col-form-label" for="nombre">Nombre</label>
            <div class="col-10">
            <input type="text" name="nombre" class="form-control">
            </div>
        </div>
        
        <div class="row mb-4">
            <label class="col-2 col-form-label" for="direccion">direccion</label>
            <div class="col-10">
            <input type="text" name="direccion" class="form-control">
            </div>
        </div>
        
        <div class="row mb-4">
            <label class="col-2 col-form-label" for="telefono">Telefono</label>
            <div class="col-10">
            <input type="number" name="telefono" class="form-control">
            </div>
        </div>
        
        <p>
            <input type="submit" value="Guardar Registro" class="btn btn-primary">
        </p>
    </form>
    </div>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table border="1" class= "table table-striped ">   
    <thead class="bg-primary text-white">
        <tr>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
        </tr>
    </thead>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td><a href="editar.html"><img src="editar.png"></a></td>
                <td><a href="eliminar.html"><img src="eliminar.png"></a></td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>