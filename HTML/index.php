<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p>bravo ivascule</p>
    <br><br>
    <a href = "http://localhost/ProiectPA/HTML/desprenoi.html"> Despre Noi </a>
    <br><br>   
    <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: http://localhost/ProiectPA/PHP/logreg/index.php");
     exit();
}
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>bravo ivascule</p>
    <br><br>
    <a href = "http://localhost/ProiectPA/HTML/desprenoi.html"> Despre Noi </a>
    <br><br><br><br><br><br><br>
    <a href="http://localhost/ProiectPA/PHP/logreg/index.php" class="ca">Login</a>
    
</body>
</html>
-->
