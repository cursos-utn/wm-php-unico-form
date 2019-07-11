<?php

// La sección de abajo solo se ejecuta cuando se envio el formulario
if (isset($_POST)) {

    $nombre = $_POST['nombre'];

    echo $nombre;
}

// De aca para abajo se ejecuta SIEMPRE (sea por envio de formulario o no)
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>
    <form action="formulario.php" method="post">
        <div>
            <label for="nombre">
                Nombre:
            </label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div>
            <label for="apellido">
                Apellido:
            </label>
            <input type="text" name="apellido" id="apellido">
        </div>

        <div>
            <label for="telefono">
                Teléfono:
            </label>
            <input type="text" name="telefono" id="telefono">
        </div>

        <div>
            <label for="email">
                E-mail:
            </label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>