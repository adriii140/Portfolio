<?php
if (isset($_POST['name']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos Proporcionados</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h3 class="text-center">Datos Proporcionados</h3>
            <p class="text-center">Gracias por proporcionar tus datos. Aquí tienes un resumen de la información que has enviado:</p>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> <?php echo $name; ?></li>
                <li class="list-group-item"><strong>Apellidos:</strong> <?php echo $apellidos; ?></li>
                <li class="list-group-item"><strong>Correo electrónico:</strong> <?php echo $email; ?></li>
                <li class="list-group-item"><strong>Mensaje:</strong> <?php echo $message; ?></li>
            </ul>
            <div class="text-center mt-4">
                <a href="../index.html" class="btn btn-primary">Volver al Inicio</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
} else {
    echo "No se han proporcionado todos los datos necesarios.";
}
?>