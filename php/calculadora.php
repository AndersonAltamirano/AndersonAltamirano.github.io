<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadoraop.php" method="post">
    <label for="primer_numero"></label>
    <input type="text" name="primer_numero" id="primer_numero" placeholder="primer digito">

    <label for="primer_numero"></label>
    <input type="text" name="segundo_numero" id="segundo_numero" placeholder="segundo digito">
    <select name="opcion" id="opcion">
        <option value="suma">suma</option>
        <option value="resta">resta</option>
        <option value="dividir">dividir</option>
        <option value="multiplicar">multiplicar</option>
        <option value="modulo">modulo</option>
    </select>
    <br>
    <input type="submit" value="enviar" name="enviar">

    </form>
   
</body>
</html>