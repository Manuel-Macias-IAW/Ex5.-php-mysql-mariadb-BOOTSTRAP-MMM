<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Datos a insertar</h1>

   <form action="insertardatos.php" method="post">

    <br>
    <label>Insertar campo firstname:</label>
    <input type="text" name="firstname" required/><br>

    <label>Insertar campo lastname:</label>
    <input type="text" name="lastname" required/><br>
 
    <label>Insertar campo email:</label>
    <input type="email" name="email" required/><br>

    <label>Insertar campo code_user:</label>
    <input type="text" name="codeuser" pattern="^u[0-9]{5}$" required/><br>

    <label>Insertar campo phone:</label>
    <input type="tel" name="phone" pattern="[0-9+\s-]{9,15}" required/><br>



    <p><input type="submit" value="Enviar"></p>




<?php include("./footer.html"); ?>
