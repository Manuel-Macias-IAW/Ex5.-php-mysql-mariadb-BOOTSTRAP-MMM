<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");

$sql = "UPDATE MyGuests SET lastname='Smith' WHERE id=2";

if (!mysqli_query($conn, $sql)) {
  echo "Error updating record: " . mysqli_error($conn);
}elseif (mysqli_affected_rows($conn)==0){ 

    echo "Record doesn't exist. Impossible to update it.";} else {
  echo "Record updated successfully";
}

// Close connection
mysqli_close($conn);
?>

<?php include("./footer.html"); ?>
