<?php
	session_start();
?>
<?php
  // $sql = "SELECT * FROM users WHERE userName, userEmail, userPwd, userUid";
  // $stmt = mysqli_stmt_init($conn);
  // while ($row = mysqli_fetch_assoc($resultData)) {
  // $username = $row['username'];
  // }
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
<section class="header" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(image/wallpaper17.jpg)">
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

<h1>Welcome To Profile</h1>
	<p>View and make settings to your profile information</p>

<!-- <div class="input-group">
	<input type="text" class="form-control" placeholder="Search Country or City">

	<div class="input-group-append">
		<button type="submit" class="input-group-text btn">Search</button>
	</div>
</div> -->
</section>
<section class="signup-form">
  <h2>User Profile</h2>
  <div class="profile">
        <h2>Profile information</h2>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Full Name</label>
            <p><input type="text" class="form-control" name="fname" id="signname" placeholder="Your Full name" value="" required /></p>
          </div>
          <div class="form-group">
            <label>Username</label>
            <p><input type="text" class="form-control" name="username" id="signname" placeholder="Your Username" value="" required /></p>
          </div>
          <div class="form-group">
            <label>Email</label>
            <p><input type="email" class="form-control" name="email" id="signname" placeholder="Your Email" value="" required /></p>
          </div>
          <div class="form-group">
            <label>Password</label>
            <p><input type="password" class="form-control" name="password" id="signname" placeholder="Your Password" value="" required /></p>
          </div>

          <button type="submit" name="submit" id=signbtn>Save edit</button>
        </form>
    </div>
</section>
<?php
	include_once 'footer.php';
?>
