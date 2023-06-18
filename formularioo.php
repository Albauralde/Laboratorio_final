<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro SCIII</title>
        <link href="estiloos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>

    <form method="POST" action="actioon.php">
    <h2><em>Formulario de Registro</em></h2><br />
<label for="nombre">Nombre <span><em>(requerido)</em></span></label>
<input type="text" name="nombre" class="form-input" pattern="[^0-9]*" required/><br /><br /> 

<label for="primer_apellido">Primer Apellido <span><em>(requerido)</em></span></label>
<input type="text" name="primer_apellido" class="form-input" pattern="[^0-9]*" required/><br /><br /> 

<label for="segundo_apellido">Segundo Apellido <span><em>(requerido)</em></span></label>
<input type="text" name="segundo_apellido" class="form-input" pattern="[^0-9]*" required/><br /><br /> 

<label for="email"> Email <span><em>(requerido)</em></span></label>
<input type="email" name="email" class="form-input" pattern="^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$" required/><br /><br /> 

<label for="login"> Login <span><em>(requerido)</em></span></label>
<input type="text" name="login" class="form-input" required/><br /><br /> 

<label for="password"> Password <span><em>(requerido)</em></span></label>
<input type="text" name="password" class="form-input" maxlength="8" minlength="4" required/><br /><br /> 

<input class="form-btn" name="submit" type="submit" value="Suscribirse" onSubmit="mostrar_boton()"/><br /><br /> 


</form>
  

</div>



</body>
</html>

    