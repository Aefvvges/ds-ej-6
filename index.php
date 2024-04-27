<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultados.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="apellido" placeholder="Apellido">
        <br>
        <input type="number" name="documento" placeholder="Documento">
        <br>
        <input type="text" name="domicilio" placeholder="Domicilio">
        <br>
        <select name="localidad">
            <option value="Rosario">Rosario</option>
            <option value="Funes">Funes</option>
            <option value="Perez">Perez</option>
            <option value="CABA">CABA</option>
        </select>
        <br>
        <select name="provincia">
            <option value="Santa Fe">Santa Fe</option>
            <option value="Buenos Aires">Buenos Aires</option>
        </select>
        <br>
        <input type="date" name="fecha_n" placeholder="Fecha">
        <br>
        <input type="number" name="telefono" placeholder="Teléfono">
        <br>
        <input type="e-mail" name="email" placeholder="E-mail">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>