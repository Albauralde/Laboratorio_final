<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <link href="estiloos2.css" rel="stylesheet" type="text/css">
</head>

<body>
  
 
    <div class="registros">
    
    
<?php

if($_POST){
        $boton=$_POST['consulta'];
// Conexión con PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";


//Create a connection
$conn2 = new mysqli ($servername, $username, $password, $dbname);

//Check connection
if ($conn2->connect_error){
    die("Connection failed; " .$conn2->connect_error);
}



$consulta = "SELECT nombre, primer_apellido, segundo_apellido, email, _login FROM formulario";
$result = $conn2->query($consulta);

if ($result->num_rows > 0) {
  // output data of each row
  while($fila = $result->fetch_assoc()) {
    echo "<p>";
    echo "<br>";
  echo $fila["nombre"];
  echo "   ";
  echo $fila["primer_apellido"];
  echo "   ";
  echo $fila["segundo_apellido"];
  echo "<br>";
  echo " - Email: "; // un separador
  echo $fila["email"];
  echo "<br>";
  echo " - Login: "; // un separador
  echo $fila["_login"];
  echo "<br>";
  echo "</p>";
   /*
    echo "<br>";
    echo "Nombre y apellidos: " . $row["nombre"]. " " . $row["primer_apellido"]. " " . $row["segundo_apellido"]. "<br>";
    echo "Email: " . $row["email"]. " - Login: " . $row["_login"]. "<br>";
    echo "<br>";
    */
  }
} else {
  echo "0 results";
}
$conn2->close();

}
?>


</div>

</body>
</html>






