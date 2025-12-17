<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Visualizar Ordenado</h1>

<form action="visualizarOrdenadoOrderBy.php" method="post">

    <label>Selecciona el campo por el que ordenar:</label>
    <br>
    <select name="campo" required>
        <option value="firstname">Firstname</option>
        <option value="lastname">Lastname</option>
        <option value="phone">Phone</option>
        <option value="user_code">User Code</option>
    </select>
    <br>

    <label>Selecciona el tipo de orden:</label>
    <br>
    <select name="orden" required>
        <option value="ASC">Ascendente</option>
        <option value="DESC">Descendente</option>
    </select>
    
    <br>

    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>