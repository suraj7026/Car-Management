<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      html{
        background-color: #fff4a3;
      }
    </style>
</head>
<body>
    <?php
    $servername = "92.204.171.50";
    $username = "surrente_suraj";
    $password = "@Suraj2308";
    $dbname = "surrente_2020";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT License_plate, Owner_name, Flat_No FROM cars";
    $result = $conn->query($sql);
    echo "<div class=' media '>";
    echo "<div class=' media-body '>";
    echo "<div class=' table-responsive  '>";
    if ($result->num_rows > 0) {
      echo "<table class = 'table table-hover ' ><tr><th>Licence Plate</th><th>Owner Name</th><th>Flat No.</th></tr>";

      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["License_plate"]."</td><td>".$row["Owner_name"]."</td><td>".$row["Flat_No"]."</td></tr>";
      }
      echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>

</body>
</html>