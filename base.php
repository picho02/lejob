<?php
$dbhost = $_SERVER['lejob2.cnx9agapxaon.us-east-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['lejob2'];
$charset = 'utf8' ;

$dsn = "mysql:host={$lejob2.cnx9agapxaon.us-east-1.rds.amazonaws.com};port={$3306};dbname={$lejob2};charset={$charset}";
$username = $_SERVER['root'];
$password = $_SERVER['123456789'];

$pdo = new PDO($dsn, $username, $password);
$conn= mysqli_connect (lejob2.cnx9agapxaon.us-east-1.rds.amazonaws.com, root,123456789) or die ("No se Conecto");
    mysqli_select_db(lejob, $conn) or die ("No se puede conectar");
    mysqli_query("INSERT INTO usuario (usuario, correo, contraseña, edad) VALUES ($Usuario','$Correo','$Contraseña','$Edad');");
    echo "Datos Enviados Correctamente";
    {
        else
    }
    echo"Error Envio de Datos";
?>