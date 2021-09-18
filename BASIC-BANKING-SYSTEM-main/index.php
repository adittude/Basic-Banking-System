<?php
include 'sql/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Aditya's Virtual Banking System</title>
</head>

<body>
<?php
include 'Header&Footer/header1.php';
?>
<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 100px; color: black">Basic Banking System</h2>
<div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
        <div class="i1-div">
          <img class="i1" src="Aditya's Virtual banking system.png" alt="Bank_Image" width="200" height="200">
        </div>
      </div>
<li><a href="user.php" style="color: 	light blue;"><span class="glyphicon glyphicon-user"></span> New Users</a></li>
<li><a href="transaction.php" style="color: light blue;"><span class="glyphicon glyphicon-transfer"></span> Transfer Money</a></li>
<li><a href="history.php" style="color: light blue;"><span class="glyphicon glyphicon-inbox"></span> History</a></li>

</div>
</div>
<?php
include 'Header&Footer/footer.php';
?>
</body>
</html>