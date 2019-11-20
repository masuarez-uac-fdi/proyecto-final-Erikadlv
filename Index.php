<?php
include ('conexion.php');
$nombre=$_POST["usuario"];
$pass=$_POST["contraseña"];
$query=mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr= mysqli_num_rows($query);

if($nr == 1){
    echo "Bienenido: ".$nombre;
    header('location: PaginaPrincipal.html');
}
else if($nr==o) {
    echo "El usuario/contraseña es invalido";
}
?>