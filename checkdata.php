<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\Login\node_modules\bootstrap\dist\css\bootstrap.css">
    <script src="C:\xampp\htdocs\Login\node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <title></title>
</head>
<body>
    <form action="validation.php" method = "POST">
        <div>
            <label for="l_plate">Licence plate</label> : <input type="text" placeholder="XX00XX0000" id = "l_plate" name = "vehicle">
        </div>
        <div>
            <button type="submit">Search</button>
        </div>
        
    </form>

</body>
</html>