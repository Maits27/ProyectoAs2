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
        <title>Menu</title>
        <link rel="stylesheet" href="../css/menu.scss">
    </head>
    <body>
        <!-- partial:index.partial.html -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
        <div class="stage">
            <div class="tile profiles">
                <h1>Performance</h1>
            </div>
            <div class="tile teams">
                <h1>Recruitment</h1>
            </div>
            <div class="tile business">
                <h1>Finance</h1>
            </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script src='https://unpkg.com/packery@2/dist/packery.pkgd.js'></script>
        <script src='https://npmcdn.com/draggabilly@2.1/dist/draggabilly.pkgd.js'></script>
    </body>
</html>