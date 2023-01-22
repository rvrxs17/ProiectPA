<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="servicii.css">
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
                <li><a href="http://localhost/ProiectPA/pagini/desprenoi.php">Despre noi</a></li>
                <li><a class active href="#">Servicii</a></li>
                <li><a href="http://localhost/ProiectPA/pagini/galerie.php">Galerie</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </nav>
            <div class="content">
            <div class="wrapper"> 
        <div class="card">
            <div class="card-banner">
              <p class="category-tag popular">SERVICIU</p>
              <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/Archerygroup.png" alt=''>
            </div>
      
            <div class="card-body">
              <h2 class="blog-title">Teambuilding </h2>
              <p class="blog-description">Prin  acest serviciu, dorim sa va propunem o activitate interesanta, dar si distractiva pentru grupul dumneavoastra, fiind modalitatea perfecta de a petrece timp impreuna, dar si de a invata tainele tirului cu arcul.</p>

                
            </div>
        </div>
    </div>

    <div class="wrapper"> 
      <div class="card">
          <div class="card-banner">
            <p class="category-tag popular">SERVICIU</p>
            <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/echipament.jpg" alt=''>
          </div>
    
          <div class="card-body">
            <h2 class="blog-title">Inchiriere echipament </h2>
            <p class="blog-description">Inchirierea echipamentului presupune primirea unui set complet care include un arc, sageti dar si echipament de protectie.</p>
          </div>
      </div>
  </div>

  <div class="wrapper"> 
    <div class="card">
        <div class="card-banner">
          <p class="category-tag popular">SERVICIU</p>
          <img class="banner-img" src="http://localhost/ProiectPA/pagini/photo/ye3.jpg" alt=''>
        </div>
  
        <div class="card-body">
          <h2 class="blog-title">Intrare One-Time </h2>
          <p class="blog-description">Este optiunea perfecta atat pentru clientii care ne viziteaza pentru prima data, dar si pentru cei care vin regulat pentru a-si imbunatatii abilitatile in acest sport.</p>
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