<?php
    require_once 'autoloader.php';
    $conexion = new Showinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PDO</title>
</head>
<body>
    <h1>Prueba de inicio para Git y futuro Push al repositorio remoto</h1>
    <form action="" method="get">
        <label>DNI</label>
			<input type="text" name="alum_nombre">
			<input type="submit" name="enviando" value="Enviar">
    </form>
    <?php
    if(empty($_GET['alum_nombre'])){
        echo "Debes enviar un nombre";
    }else{
        echo $conexion->get();
    }
    ?>
</body>
</html>