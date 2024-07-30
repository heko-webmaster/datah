<?php
$servername = "198.59.144.157";
$username = "datahtec_Flotas_2024";
$password = "FEYdtGCu2H2+";
$dbname = "datahtec_Flotas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
