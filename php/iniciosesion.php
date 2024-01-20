<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <form action="" method="post" name="datosusuario">
        <label for="nombre"></label>
        <input type="text" name="nombre" id="nombre">
        <label for="edad"></label>
        <input type="text" name="edad" id="edad">
        <input type="submit" value="enviar" name="enviar" id="enviar">

        <?php 
        /* el if evalua si se clickeo el boton enviar */
        if(isset($_POST["enviar"])=="anderson"){
            $usuario = $_POST["nombre"];
            $edad = $_POST["edad"];
            if($usuario=="anderson"){
                echo "puedes entrar";
            }else{
                echo "no puedes entrar";
            }
        }
        ?>

    </form>
</body>
</html>