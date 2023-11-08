<?php
    include 'db_link.php';

    //Nueva sesion:
    session_start();

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contra = $_POST["contrasena"];
    $confirmacion = $_POST["confirmacion"];

    $select = "SELECT * FROM usuarios WHERE email = '$email'";
    $query = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($query);

    if($num_rows>=1) header("Location: ../paginas/registro.php?keyerror=1");
    else{
        $id =  bin2hex(md5('$nombre', '$contra'));
        //$id = 1
        $insert = "INSERT INTO usuarios (id, nombre, email, contrasena) VALUES ('$id','$nombre', '$email', '$contra')";
        
        $query2 = mysqli_query($conn, $insert); //or die (mysqli_error($conn));
        
        if($query2){
            $_SESSION['username'] = $nombre;
            $_SESSION['email'] = $email;
            $_SESSION['ID_USER'] = $id;
            header("Location: ../paginas/user_menu.php");
        }else{
            header("Location: ../index.php?fallo=2"); 
        }      
        /*if(mysqli_errno($conn) == 1062){ //Adierazitako NAN jadanik datu basean badago (1062 error: Duplicate primary entry)
            header("Location: ../orriak/registro.php?keyerror=2");
        }
        else{
            header("Location: ../paginas/user_menu.php");
        }*/ 
    } 
    
    mysqli_close($conn);
?>