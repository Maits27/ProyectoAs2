<?php
    include 'db_link.php';

    //Nueva sesion:
    session_start();

    $email = $_POST["email2"];
    $contra = $_POST["contrasena2"];

    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '".$email."' and contrasena = '".$contra."'") or die (mysqli_error($conn));
    $num_rows = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    if($num_rows >= 1){
        $_SESSION['username'] = $row['nombre'];
        $_SESSION['email'] = $email;
        $_SESSION['ID_USER'] = $row['id'];
        header("Location: ../paginas/user_menu.php"); 
    }
    else{
        header("Location: ../index.php?fallo=2"); 
    }

    mysqli_close($conn);
?>