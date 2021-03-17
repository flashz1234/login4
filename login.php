<?php
	include_once 'header.php';
?>

	<section class="signup-form">
		<div class="container">

		  <form action="includes/login.inc.php" method="post">
				<div class="textfieldlogin">
					<h2>Log In</h2><hr>
					<input type="text" name="uid" placeholder="Username/Email" id="userid">
          <input type="password" name="pwd" placeholder="Password" id="userpass">

					<?php
					    if (isset($_GET["error"])) {
					      if ($_GET["error"] == "emptyinput") {
					        echo "<p>Fill in all fields!</p>";
					      }
								else if ($_GET["error"] == "wronglogin") {
					        echo "<p>Incorrect login information!</p>";
					      }
					    }
			     ?>
					<hr>
					<button type="submit" name="submit" id="loginbtn">Log In</button>
				</div>
		  </form>
		</div>

	</section>

	<!--Footer-->
	<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="footer-logo" src="image/logo.png">
			</div>

			<div class="col-md-3">
				<h4>Quick Contact</h4>
				<p><i class="fa fa-phone-square"></i> +60105917200 (Mr. Chan)</p>
				<p><i class="fa fa-envelope"></i> hsdstarlord001@gmail.com</p>
				<!--<p><i class="fa fa-home"></i> Parkson, Bintang Mega Mall Lot 1657 Block 9, Jalan Miri Pujut, 98000 Miri, Sarawak</p>-->
			</div>

			<div class="col-md-3">
				<h4>Follow Us On</h4>

				<p class="hyper"><i class="fa fa-facebook-official"></i> <a  href="https://www.facebook.com/Atracci%C3%B3n-del-viajero-105745618263913" target="_blank">Facebook</a></p>
				<p class="hyper"><i class="fa fa-instagram"></i> <a  href="https://www.instagram.com/travelerattractions0057/" target="_blank">Instagram</a></p>
				<p class="hyper"><i class="fa fa-twitter"></i> <a  href="https://twitter.com/TravelAttracti1" target="_blank">Twitter</a></p>
			</div>
		</div><hr>
		<p class="copyright">Copyright <i class="fa fa-copyright"></i> All Rights Reserved</p>
	</div>

	<!--Button to scroll back top of the page-->
	<a class="gotopbtn" href="#" style="text-decoration: none;">^</a>
	</section>

	<!--Javascript for the toggle menu-->
	<script>
	  var Menu = document.getElementById("menubar")

	  Menu.style.maxHeight = "0px"

	  function menutoggle(){
	    if (Menu.style.maxHeight == "0px")
	       {
	         Menu.style.maxHeight = "200px";
	       }

	    else
	       {
	         Menu.style.maxHeight = "0px";
	       }
	  }
	</script>
	</body>
	</html>
