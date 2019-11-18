<?php
header("Location: http://localhost:63342/proyecto-final-Erikadlv/PaginaPrincipal.html?_ijt=gmg0m71668a13glbpqatldo90p");

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
    echo "Bienenido: ".$nombre;
        header('location: ');
        /*echo "<head><meta http-equiv='refresh' content='2; url='PaginaPrincipal.html'></head>";*/
    }
    else if($nr==0) {
        echo "El usuario/contraseña es invalido";
    }
?>