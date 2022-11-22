<!DOCTYPE html>
<html>
<head>
	<title>CONT NOU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>CONT NOU</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nume</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nume"><br>
          <?php }?>

          <label>Nume Utilizaror</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Nume Utilizator"><br>
          <?php }?>


     	<label>Parola</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Parola"><br>

          <label>Repeta Parola</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Repeta Parola"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Ai deja un cont?</a>
     </form>
</body>
</html>