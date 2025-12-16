<?php include ("cabecera.html"); ?>
<?php include("sesion.php"); ?>

<?php
$servername = "localhost";
$username = "mmm";    
$password = "1234";   

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Create database
$sql = "CREATE DATABASE bd_w3_mmm2";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>
