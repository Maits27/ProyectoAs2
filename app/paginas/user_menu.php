<?php 

    session_start();

    $user = $_SESSION['username'];

    //Necesario el inicio de sesión
    if(!isset($user)){
        header("location: ../index.php");
    }

?>


<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Enlace al CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Menu</title>
    </head>
    <body>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </button>
        <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Gráficas</button></li>
            <li><button class="dropdown-item" type="button">Añadir transacción</button></li>
            <li><button class="dropdown-item" type="button">Chat</button></li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>