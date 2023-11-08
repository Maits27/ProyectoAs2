
<?php

    //session_start();

    $user = $_SESSION['username'];

    //Sesión ya iniciada, no se puede acceder al index
    if(isset($user)){
        header("location: paginas/user_menu.php");
    }

    if(empty($_GET['fallo'])) $error = 0;
    else $error = 1;    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log-in</title>
        <!--link rel="stylesheet" href="{{ url_for('static', filename='css/index.css') }}"-->
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
      <div class="container">
        <div class="message signup">
        <div class="form--heading">Welcome back! </div>
          <form autocomplete="off" id=formulario1 method="post" action="config_php/login.php">
            <input type="text" id="email" placeholder="Email">
            <input type="password" id="contrasena" placeholder="Contraseña">
            <button class="button">Login</button>
            <?php 
              if($error == 1) echo "<p class='error_message'>No existe el usuario.</p>" 
            ?> 
          </form>
        </div>
        <div class="form form--signup">
          <div class="form--heading">Welcome! Sign Up</div>
          <form autocomplete="off" id="formulario" method="post" action="config_php/registro.php">
            <input type="text" id="nombre" placeholder="Nombre" required>
            <!--input type="text" id="nombregrupo" placeholder="Nombre del grupo" required-->
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="contrasena" placeholder="Contraseña" required>
            <input type="password" id="confirmacion" placeholder="Repite la contraseña..." required>
            <button class="button">Sign Up</button>
            <p id="erroreak" class="error_message">
							<?php 
								if($error==1) echo "¿Tienes cuenta ya? Entra desde el login.";
								//if($error==2) echo "Jadanik existitzen da erabiltzaile bat NAN horrekin." ;
							?>
						</p>   
          </form>
        </div>
        <div class="form form--login">
          <div class="form--heading">Welcome back! </div>
          <form autocomplete="off">
            <input type="text" placeholder="Name">
            <input type="password" placeholder="Password">
            <button class="button">Login</button>
            <?php 
              if($error == 1) echo "<p class='error_message'>¿Tienes cuenta ya? Entra desde el login.</p>" 
            ?> 
          </form>
        </div>
      </div>
    </body>
</html>

