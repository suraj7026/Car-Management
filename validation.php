<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <?php
    $servername = "92.204.171.50";
    $username = "surrente_suraj";
    $password = "what2give";
    $dbname = "surrente_2020";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $vehicle = $_POST['vehicle'];
    $sql = "select License_plate, Owner_name, Flat_No from cars where License_plate = '$vehicle'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>Licence Plate</th><th>Owner Name</th><th>Flat No.</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["License_plate"]."</td><td>".$row["Owner_name"]."</td><td>".$row["Flat_No"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "Vehicle not from here";
    }
    $conn->close();
    ?>
</body>
</html>