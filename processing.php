<?php
$servername = "92.204.171.50";
$username = "surrente_suraj";
$password = "@Suraj2308";
$dbname = "surrente_2020";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$vehicle = $_POST['vehicle'];
$name = $_POST['name'];
$flat = $_POST['flat'];
$sql = "insert into cars values('$vehicle','$name', '$flat');";
mysqli_query($conn, $sql);
header("Location: add data.php?recordsadded")
?>