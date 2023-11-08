<?php
    include 'db_link.php';

    //erregistratu.html orritik "POST" bidez lortu ditugun aldagaiak:
    $nombre = $_POST["Nombre"];
    //$NAN = $_POST["NAN"];
    //$Telefonoa = $_POST["Telefonoa"];
    //$Jaiotze_data = $_POST["Jaiotze_data"];
    $email = $_POST["email"];
    //$nombreGrupo = $_POST["nombregrupo"]
    $Contra = $_POST["contrasena"];
    $Confirmacion = $_POST["confirmacion"];

    $select = "SELECT * FROM usuarios WHERE email = '$email'";
    $query = mysqli_query($conn, $select);
    $num_rows = mysqli_num_rows($query);
    if($num_rows>=1) header("Location: ../paginas/registro.php?keyerror=1");
    else{
        $insert = "INSERT INTO usuarios (id, nombre email, contrasena) 
               VALUES (MD5(CONCAT('$nombre', '$Contra')),'$nombre', '$email', '$Contra')" ;
        
        $query = mysqli_query($conn, $insert); //or die (mysqli_error($conn));
        
        /*if(mysqli_errno($conn) == 1062){ //Adierazitako NAN jadanik datu basean badago (1062 error: Duplicate primary entry)
            header("Location: ../orriak/registro.php?keyerror=2");
        }
        else{
            header("Location: ../paginas/user_menu.php");
        }*/
        $_SESSION['username'] = $row['Nombre'];
        $_SESSION['email'] = $email;
        $_SESSION['ID_USER'] = $row['id'];
        header("Location: ../paginas/user_menu.php");
    } 
    
    mysqli_close($conn);
?>