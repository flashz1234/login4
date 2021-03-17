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
  <link  rel="stylesheet" href="css/styledes.css">
  <link  rel="stylesheet" href="css/destinations.css">
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>
<body>
<section class="header" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(image/wallpaper15.jpg)">
	<div class="container">
		<img class="logo" src="image/logo.png">

		<div class="navbar">
			<nav>
				<ul id="menubar">
				  <!-- <li><a href="login.php" class="active">Home</a></li> -->
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href='aboutus.html'>About</a></li>
					<li><a href='transportation.php'>Transportation</a></li>
					<li><a href='profile.php'>Profile</a></li>
					<li><a href='includes/logout.inc.php'>Log Out</a></li>
					<?php
						//if (isset($_SESSION["useruid"])) {
						//	echo "<li><a href='index.php'>Home</a></li>";
						//}
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

<h1>Popular Destinations in Malaysia</h1>
	<p>Every place has it's own specialties</br>Discover it yourself with your own eyes to learn the beauty of every places!</p>

<!-- <div class="input-group">
	<input type="text" class="form-control" placeholder="Search Country or City">

	<div class="input-group-append">
		<button type="submit" class="input-group-text btn">Search</button>
	</div>
</div> -->
</section>


<section class="gallery">
<h1>Popular Destination Points</h1>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class = gallery-box>
				<a href="selangor.php" target=""><img src="attractions/selangor/Batu Caves 02.jpg"></a>
				<h4>Selangor</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="kuala lumpur.php" target=""><img src="attractions/kuala lumpur/KLSC00.jpg"></a>
				<h4>Kuala Lumpur</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="sarawak.php" target=""><img src="attractions/sarawak/Kuching WF 1.jpg"></a>
				<h4>Sarawak</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="johor.php" target=""><img src="attractions/johor/Danga Bay01.png"></a>
				<h4>Johor</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="sabah.php" target=""><img src="attractions/sabah/mountkinabalu00.jpg"></a>
				<h4>Sabah</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="kedah.php" target=""><img src="attractions/kedah/Langkawi Cable Car00.jpeg"></a>
				<h4>Kedah</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="kelantan.php" target=""><img src="attractions/kelantan/Pantai Sri Tujuh01.jpg"></a>
				<h4>Kelantan</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="labuan.php" target=""><img src="attractions/labuan/LabuanClockTower00.jpg"></a>
				<h4>Labuan</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="melaka.php" target=""><img src="attractions/melaka/A Famosa Resort Malaysia [Alor Gajah]01.jpg"></a>
				<h4>Malacca</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="negeri sembilan.php" target=""><img src="attractions/negeri sembilan/Port Dickson05.jpg"></a>
				<h4>Negeri Sembilan</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="pahang.php" target=""><img src="attractions/pahang/Awana Skyway03.jpg"></a>
				<h4>Pahang</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="penang.php" target=""><img src="attractions/penang/Penang Island02.jpg"></a>
				<h4>Penang</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="perak.php" target=""><img src="attractions/perak/Pangkor Island00.jpg"></a>
				<h4>Perak</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="perlis.php" target=""><img src="attractions/perlis/Bukit Ayer Amenity Forest01.jpg"></a>
				<h4>Perlis</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="putrajaya.php" target=""><img src="attractions/putrajaya/Putrajaya Landmark 01.jpg"></a>
				<h4>Putrajaya</h4>
			</div>
		</div>

		<div class="col-md-3">
			<div class = gallery-box>
				<a href="terengganu.php" target=""><img src="attractions/terengganu/Kapas Island02.jpg"></a>
				<h4>Terengganu</h4>
			</div>
		</div>
	</div>
</div>
</section>

<?php
	include_once 'footer.php';
?>
