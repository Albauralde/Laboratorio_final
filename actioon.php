
<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro SCIII</title>
        <link href="estiloos2.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="group">
<form method="post" action="actioon2.php">

<?php

if(isset($_POST["nombre"], $_POST["primer_apellido"], $_POST["segundo_apellido"], $_POST["email"], $_POST["login"], $_POST["password"]) 
    and $_POST["nombre"]!="" and $_POST["primer_apellido"]!="" and $_POST["segundo_apellido"]!="" and $_POST["email"]!="" 
    and $_POST["login"]!="" and $_POST["password"]!="" ){
        $nombre=$_POST['nombre'];
        $primer_apellido=$_POST['primer_apellido'];
        $segundo_apellido=$_POST['segundo_apellido'];
        $email=$_POST['email'];
        $login=$_POST['login'];
        $password=$_POST['password'];

// Conexión con PDO
$servername = "localhost";
$username = "root";
$_password = "";
$dbname = "cursosql";


//Create a connection
$conn = new mysqli ($servername, $username, $_password, $dbname);

//Check connection
if ($conn->connect_error){
    die("Connection failed; " .$conn->connect_error);
}

$sql = "INSERT INTO formulario (nombre, primer_apellido, segundo_apellido, email, _login, _password) 
        VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$email', '$login', '$password')";

if ($conn->query($sql) === TRUE){
    echo "<br>";
    echo "Registro completado con éxito";
    echo "  ";
    echo "<br>";
    echo "<br>";
    } else {
        echo "Error: " .$sql . "<br>" .$conn->error;
    }

$conn->close();

}

?>
         
        <input class="form-btn" name="consulta" id="consulta" type="submit" value="Consulta" /><br /><br />
    

</form>

</div>  

</body>
</html>

