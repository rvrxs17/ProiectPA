<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="galerie.css">
    <link rel="stylesheet" href="http://localhost/ProiectPA/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class = "meniu">
        <nav>
        <div class="logo">A.C.S. Arcasii Tarii Barsei</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
                <li><a href="http://localhost/ProiectPA/pagini/index.php">Acasa</a></li>
                <li><a href = "#">Programari</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/desprenoi.php">Despre noi</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a class="active" href="http://localhost/ProiectPA/pagini/galerie.php">Galerie</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <br><br><br><br><br><br><br><br>

        <div class="wrapper"> 
            <div class="card">
                <div class="card-banner">
                  <p class="category-tag popular">CONCURS</p>
                  <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/poza.jpg" alt=''>
                </div>
          
                <div class="card-body">
                  <h2 class="blog-title">3D Outdoor HDH-IAA Baile Tusnad 2022 </h2>
                  <p class="blog-description">Am vrut sa va surprindem cu un alt format de concurs 3D, sa va scoatem din zona de confort, sa va punem simturile si abilitatile la incercare pe un traseu foarte apropiat de ceea ce vom gasi noi peste 2 saptamani in Slovenia la campionatul mondial.

                    Va multumim ca ne-ati tinut isonul in nebunia noastra si speram sa ne dati ocazia sa va mai chinuim probabil pentru ultima data pe anul acesta la Draganu,Campionat national de 3D pe un traseu format din doua terenuri similare cu ceea ce v-am pregatit in weekend la Tusnad.</p>
                </div>
            </div>
        </div>

        <div class="wrapper"> 
            <div class="card">
                <div class="card-banner">
                  <p class="category-tag popular">CONCURS</p>
                  <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/poza1.jpg" alt=''>
                </div>
          
                <div class="card-body">
                  <h2 class="blog-title">3D Outdoor HDH-IAA Baile Tusnad 2022 </h2>
                  <p class="blog-description">Doua zile de competitie in varf de munte, intr-un peisaj de vis, la 3D Field Challenger 6 intr-o atmosfera calda cum mereu gasim la Club Sportiv "Szirtisas" Íjász Sportklub . 
                    Am participat cu 5 arcasi si ne-am intors cu 5 medalii de aur la 5 categorii diferite. Record de Club 5 din 5.</p>
          
                </div>
            </div>
        </div>
        
        <div class="wrapper"> 
            <div class="card">
                <div class="card-banner">
                  <p class="category-tag popular">CONCURS</p>
                  <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/poza1.jpg" alt=''>
                </div>
          
                <div class="card-body">
                  <h2 class="blog-title">3D Outdoor HDH-IAA Baile Tusnad 2022 </h2>
                  <p class="blog-description">Doua zile de competitie in varf de munte, intr-un peisaj de vis, la 3D Field Challenger 6 intr-o atmosfera calda cum mereu gasim la Club Sportiv "Szirtisas" Íjász Sportklub . 
                    Am participat cu 5 arcasi si ne-am intors cu 5 medalii de aur la 5 categorii diferite. Record de Club 5 din 5.</p>
          
                </div>
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