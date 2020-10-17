<?php
    $Usuario=$_POST['usuario'];
    $Correo=$_POST['correo'];
    $Contraseña=$_POST['contraseña'];
    $Edad=$_POST['edad'];
    

    // if(isset($_POST['usuario'])&& !empty($_POST['usuario']) &&
    // (isset($_POST['contraseña'])&& !empty($_POST['contraseña']) &&
    // (isset($_POST['correo'])&& !empty($_POST['correo'])
    // )

    $Conexion= mysql_connect (lejob2.cnx9agapxaon.us-east-1.rds.amazonaws.com, root,123456789) or die ("No se Conecto");
    mysql_select_db(lejob, $Conexion) or die ("No se puede conectar");
    mysql_query("INSERT INTO usuario (usuario, correo, contraseña, edad) VALUES ($Usuario','$Correo','$Contraseña','$Edad');");
    echo "Datos Enviados Correctamente";
    {
        else
    }
    echo"Error Envio de Datos";
 ?>