<?php 

    session_start();

    $user = $_SESSION['username'];

    //Necesario el inicio de sesión
    if(!isset($user)){
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" type="text/css" href="../../estiloak/general.css">
        <link rel="stylesheet" type="text/css" href="../../estiloak/user_menu/user_menu.css">
        <link rel="shortcut icon" href="../../irudiak/book.png" />
    </head>
    <body>
        <?php include '../../templates/header.php'; ?>
        <div class="menua">
            <div class="botoi_panel">
                <button><a href="./datuen_aldaketa.php">Nire datuak aldatu</a></button>
                <button><a href="./liburu_zerrenda.php">Liburuen zerrenda ikusi</a></button>
                <button><a href="./liburu_gehitu.php">Liburua gehitu</a></button>
                <button><a href="../../config_php/logout.php">Saioa itxi</a></button>
            </div>
        </div>
        <!-- <a href="datuen_aldaketa.html">Nire datuak aldatu</a> -->
        <!-- <a href="liburu_zerrenda.html">Liburuen zerrenda ikusi</a>
        <a href="liburu_gehitu.html">Liburua gehitu</a>
        <a href="../index.html"></a> -->
    </body>
</html>
