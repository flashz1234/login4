<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atracción del viajero | Official</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" href="css/style.css">
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>
<body>
<section class="header" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(image/wallpaper1.jpg)">
	<div class="container">
		<img class="logo" src="image/logo.png">

		<div class="navbar">
			<nav>
				<ul id="menubar">
					<?php
						if (isset($_SESSION["useruid"])) {
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='aboutus.html'>About</a></li>";
							echo "<li><a href='destinations.php'>Destinations</a></li>";
							echo "<li><a href='transportation.php'>Transportation</a></li>";
							echo "<li><a href='profile.php'>Profile</a></li>";
							echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
						}
						else{
							echo "<li><a href='login.php'>Login</a></li>";
							echo "<li><a href='signup.php'>Register</a></li>";
						}
					 ?>
				</ul>
				<img src="image/menu.png" class="menu" onclick="menutoggle()">
			</nav>
		</div>
	</div>
	<?php
		if(isset($_SESSION['userId'])){
			echo '<p class="login-status">You are logged Out!</p>';
		}
	 ?>

<h1>Welcome To Malaysia</h1>
	<p>We are here to guide you through the</br>interesting and beautiful places in Malaysia</p>

<!-- <div class="input-group">
	<input type="text" class="form-control" placeholder="Search Country or City">

	<div class="input-group-append">
		<button type="submit" class="input-group-text btn">Search</button>
	</div>
</div> -->
</section>
