<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Receptora</title>
</head>
<body>
    <h2>Pagina recpetora</h2>
    <p>Aqui se recuperan los datos del formulario y se guardan los datos</p>
    <?php
        echo "Codigo php";
        echo "datos registrados para el usuario";
        echo "<p></p>";
        echo $_GET["nombre"];
    ?>
</body>
</html>