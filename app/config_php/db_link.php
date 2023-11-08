<?php
    /*$servername = "db";
    $username = "admin";
    $password = "test";
    $database = "database";  // Nombre de la base de datos
    
    // Crear una conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";
    
    // Cierra la conexión
    //$conn->close();
    //datu basearen konexioa ahalbidetzen dituzten aldagaiak:
    /*$servername = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
    
        // Resto del código para realizar consultas, inserciones, actualizaciones, etc.
    } catch(PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    
    // Cerrar la conexión cuando hayas terminado
    $conn = null;*/
    //DB-arekin konexioa:
    $hostname = "mysql";
    $username = "root";
    $password = "test";
    $db = "database";

    //DB-arekin konexioa:
    $conn = mysqli_connect($hostname,$username,$password,$db);

    if ($conn->connect_error) {
        die("Database connection failed: " .$conn->connect_error);
    }
    // Hay que tener cuidado de no escribir un espacio despúes de la siguiente linea, la de cierre de php.
?>