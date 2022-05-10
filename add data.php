<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\Login\node_modules\bootstrap\dist\css\bootstrap.css">
    <script src="C:\xampp\htdocs\Login\node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <title>Add Data</title>
</head>
<body>
    <form action="processing.php" method="POST">
        <div>
            <label for="l_plate">Licence plate</label> : <input type="text" placeholder="XX00XX0000" id = "l_plate" name = "vehicle">
        </div>
        <div>
            <label for="owner">Owner Name</label> : <input type="text" placeholder="Owner Name" id= "owner" name = "name">
        </div>
        <div>
            <label for="house">Flat No.</label> : <input type="number" placeholder="0000" id= "house" name= "flat">
        </div>
        <button type="submit" name = "submit">Submit</button>
    </form>



</body>
</html>