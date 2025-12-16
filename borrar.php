<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");
?>

<h1>Borrar Usuario</h1>

<form action="borrarID.php" method="post">

    <label>Introduce el ID del usuario a borrar:</label>
    <br>
    <input type="number" name="id" required>
    
    <br>

    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>