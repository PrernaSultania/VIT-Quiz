<?php
	include_once 'db_connection.php';
	include_once 'header_login.php';
	
?>

<form class="gen_ac" action="generate_access_code.php" method="POST">
	<p class="gen_ac_title">Click the button below to generate an access code for <?php echo "<p id='gen_ac_title'>".$_SESSION['course']."</p>"; ?></p>
	<br><br>
	<button type="submit" class="submit_signup" name="gen_ac">Access Code</button>
	<?php
		if(isset($_POST['gen_ac']))
		{
			$course=$_SESSION['course'];
			$faculty=strtolower($_SESSION['username']);
			$randomid = mt_rand(100000,999999); 
			$sql="UPDATE quiz SET access_code='$randomid' WHERE course='$course';";
			mysqli_query($connect,$sql);
			echo "<p id='access_codex'>".$randomid."</p>";
		}
	?>

</form>

<?php

	include_once 'footer_login.php';
?>