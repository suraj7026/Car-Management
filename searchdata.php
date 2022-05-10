<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>Vehicle's of Sobha</title>
    <style>
        h1{
            text-align: center;
        }
        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
    </style>
    <br>
    <h1> Vehicle's of Sobha </h1>

</head>
<body>
    <br><br>
    <div class="m-4"> 
    <h2>Add Data</h2>
    <br>
    <form action="" method="post" >
        
        <div class="row align-items-center g-3">
            <div class="col-md-auto col-12">
                <label class="visually-hidden form-label d-md" for="l_plate"  ><h4>Licence plate</h4></label> <input type="text" class="form-control" placeholder="XX00XX0000" id = "l_plate" name = "vehicle" required>
            </div>
            <div class="col-md-auto col-12">
                <label class="visually-hidden form-label d-md" for="owner" ><h4>Owner Name</h4></label> <input type="text" class="form-control" placeholder="Owner Name" id= "owner" name = "name" required>
            </div>
            <div class="col-md-auto col-12">
                <label class="visually-hidden form-label d-md" for="house"><h4>Flat No.</h4></label> <input type="number" class="form-control" placeholder="0000" id= "house" name= "flat">
        </div>
        
        <br><br><br><br><br>
            </div class="col-md-auto col-12">
                <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
            </div>
    </form>
    <?php
        if (isset($_POST['vehicle']) && isset($_POST['name']) && isset($_POST['flat'])){
            $servername = "92.204.171.50";
            $username = "surrente_suraj";
            $password = "@Suraj2308";
            $dbname = "surrente_2020";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            $vehicle = $_POST['vehicle'];
            $name = $_POST['name'];
            $flat = $_POST['flat'];
    
            $result = $conn->query($sql2);

            if ($result->num_rows > 0) {
              echo "<table><tr><th>Licence Plate</th><th>Owner Name</th><th>Flat No.</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["License_plate"]."</td><td>".$row["Owner_name"]."</td><td>".$row["Flat_No"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "Vehicle not from here";
            }
    
        }

    ?>
    </div>
    <br><br><br>
    <div>

    <h2>Check Records</h2>
    <div class="m-4">
    <form action="" method="post">
        <div class="row align-items-center g-3">
            <div class="col-md-auto col-12">
                <label class="form-label d-md-none" for="search_lplate" >Enter Plate No.</label>
                <input type="text" class="form-control" id="lplate" placeholder="Plate No." name="search_lplate">
            </div>
            <div class="col-md-auto col-12">
                <label class="form-label d-md-none" for="search_name" >Name</label>
                <input type="text" class="form-control" id="search_name" placeholder="Name" name="search_name">
            </div>
            <div class="col-md-auto col-12">
                <label class="form-label d-md-none" for="search_flat" >Enter Plate No.</label>
                <input type="text" class="form-control" id="search_flat" placeholder="Flat No." name="search_flat">
            </div>
            <div class="col-md-auto col-12">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <?php
    
    
    
    

    ?>
    </div>

    </div>
    
    
    </div>

</body>
</html>