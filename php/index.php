<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <?php
    if(isset($_GET['nombre'])){
        $saludo = $_GET['nombre'];
        echo "<input type text name= 'nombre' value ='$saludo'>";
    }
    if(isset($_GET['dos'])){
       echo "Dos";
    }
    ?>   
    
</body>
</html>