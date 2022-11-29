<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="desprenoi.css">
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
                <li><a href="http://localhost/ProiectPA/pagini/index.php">Acasa</a></li>
                <li><a href = "http://localhost/ProiectPA/pagini/programari.php">Programari</a></li>
                <li><a  class="active" href="http://localhost/ProiectPA/pagini/desprenoi.html">Despre noi</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/galerie.php">Galerie</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            <div class="content">
                <div>A.C.S. Arcasii Tarii Barsei is a traditional archery and historic archery club in Rasnov, Brasov County. If you want to get started and learn the secrets of traditional archery or historical archery, we are waiting for you with all the necessary equipment for this. We do not guarantee that you will be a Robin Hood at first, but we promise that you will spend quality time learning the skills of archery with us, and if you think you want to perform in this sport, we are a team of professionals, ready to support and guide you on this journey.

                </div>
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