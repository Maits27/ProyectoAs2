<?php
    include 'db_link.php';

    //Nueva sesion:
    session_start();

    //index.html orritik "POST" bidez lortu ditugun aldagaik:
    $email = $_POST["email"];
    $Contra = $_POST["contrasena"];

    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '".$email."' and contrasena = '".$contra."'") or die (mysqli_error($conn));
    $num_rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    if($num_rows >= 1){
        //erabiltzailea eta pasahitza ondo sartu badira, "user_menu.html" orrira joango gara.
        $_SESSION['username'] = $row['Nombre'];
        $_SESSION['email'] = $email;
        $_SESSION['ID_USER'] = $row['id'];
        header("Location: ../paginas/user_menu.php"); 
    }
    else{
        header("Location: ../index.php?fallo=1"); 
    }

    mysqli_close($conn);
?>