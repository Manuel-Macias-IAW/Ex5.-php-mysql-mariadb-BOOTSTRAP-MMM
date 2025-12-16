<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>
 
 <?php
include("db_connect.php");


// Prepare the multiple query
$sql = "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('John', 'Doe', 'john@example.com', '600111001', 'u10001');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('Mary', 'Moe', 'mary@example.com', '600222002', 'u10002');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code)
VALUES ('Julie', 'Dooley', 'julie@example.com', '600333003', 'u10003')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?> 
<?php include("./footer.html"); ?>
