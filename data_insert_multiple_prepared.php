<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("db_connect.php");

// Prepare statement
$stmt = mysqli_prepare($conn, "INSERT INTO MyGuests (firstname, lastname, email, phone, user_code) VALUES (?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $phone, $user_code);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$phone = "600123456";      
$user_code = "u00001";      
mysqli_stmt_execute($stmt);

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$phone = "600987654";      
$user_code = "u00002";     
mysqli_stmt_execute($stmt);

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$phone = "600555444";    
$user_code = "u00003";    
mysqli_stmt_execute($stmt);

echo "New records created successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<?php include("./footer.html"); ?>
