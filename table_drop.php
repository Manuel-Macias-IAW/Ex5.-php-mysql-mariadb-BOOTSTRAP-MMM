<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");

// sql to delete table
$sql = "DROP TABLE IF EXISTS MyGuests";


if (mysqli_query($conn, $sql)==false) {
  echo "Error deleting table: " . mysqli_error($conn);
} else {
  echo "Table MyGuests (if it existed) deleted successfully";
}

// Close connection
mysqli_close($conn);
?> 

<?php include("./footer.html"); ?>
