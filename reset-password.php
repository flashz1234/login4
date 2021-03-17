<?php
	include_once 'header.php';
?>

	<section class="selection-default">
		<h2>Reset your password</h2>
    <p>An email will be send to you with instructions on how to reset your password.</p>
    <form  action="includes/reset-request.inc.php" method="post">
			<div class="resetfield">
				<input type="text" name="email" placeholder="Enter your e-mail address" id="reemail">
	      <button type="submit" name="reset-request-submit" id=resetbtn>Receive new password by email</button>
			</div>
    </form>
    <?php
      if(isset($_GET["reset"])){
        if($_GET["reset"] == "success"){
          echo '<p class="reset-password">Check your e-mail!</p>';
        }
      }
    ?>
	</section>


<?php
	include_once 'footer.php';
?>
