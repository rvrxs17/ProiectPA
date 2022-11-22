<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <nav>
            <div class="logo">A.C.S. Arcasii Tarii Barsei</div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a class="active" href="#">Acasa</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/desprenoi.html">Despre noi</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="#">Galerie</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            <div class="content">
                        <div>A.C.S. Arcasii Tarii Barsei
                        <br><br>
                        <a href = "http://localhost/ProiectPA/pagini/desprenoi.html"> Despre Noi </a>
                        <br><br>   
                        <a href="logout.php">Logout</a>
                </div>
            </div>
        </body>
        </html>

<?php 
}else{
     header("Location: http://localhost/ProiectPA/logreg/index.php");
     exit();
}
?>

<!--

        <!DOCTYPE html>
        <html>
        <head>
            <title>Index</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
        <p>bravo ivascule</p>
            <br><br>
            <a href = "http://localhost/ProiectPA/pagini/desprenoi.html"> Despre Noi </a>
            <br><br>   
            <a href="logout.php">Logout</a>
        </body>
        </html>
-->
