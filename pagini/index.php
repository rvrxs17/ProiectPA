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
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="style.css">
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
                <li><a href = "http://localhost/ProiectPA/pagini/programari.php">Programari</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/desprenoi.php">Despre noi</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/servicii.php">Servicii</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/galerie.php">Galerie</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            <br>
            <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="http://localhost/ProiectPA/pagini/photo/Archerygroup2.png" style="width:100%">
            <div class="text">Teambuilding</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="http://localhost/ProiectPA/pagini/photo/echipament2.jpg" style="width:100%">
            <div class="text">Echipament</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="http://localhost/ProiectPA/pagini/photo/poza.jpg" style="width:100%">
            <div class="text">Premiere Baile Tusnad 2022</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script src="script.js"></script>
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
