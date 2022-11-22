<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/ProiectPA/logreg/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nume Utilizaror:</label>
     	<input type="text" name="uname" placeholder="Nume Utilizator"><br>

     	<label>Parola:</label>
     	<input type="password" name="password" placeholder="Parola"><br>

     	<button type="submit">Login</button>
        <a href="signup.php" class="ca">Utilizator nou?</a>
     </form>
</body>
</html>