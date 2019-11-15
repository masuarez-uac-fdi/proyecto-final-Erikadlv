<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="test";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }
        $nombre=$_POST["usuario"];
        $pass=$_POST["contraseña"];

    $query=mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
    $nr= mysqli_num_rows($query);
    
    if($nr == 1){
    /*echo "Bienenido: ".$nombre;*/
        header('location: ');
    }
    else if($nr==o) {
        echo "El usuario/contraseña es invalido";
    }
?>