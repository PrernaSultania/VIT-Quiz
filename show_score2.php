<?php 
	include_once 'header_login.php';
	include_once 'db_connection.php';
	
?>

<p class="sub_head"><?php echo $_POST['select_course']; ?></p>



<table class="score">
	<tr>
		<th>S.NO.</th>
		<th>QUIZ NUMBER</th>
		<th>SCORE</th>
	</tr>

<?php
	if(isset($_POST['select_course']))
	{
		$course=$_POST['select_course'];
		$username=$_SESSION['username'];
		$quiz_number=$_POST['quiz_number'];
		$sql="SELECT student FROM quiz_score WHERE course='$course' AND student='$username' AND quiz_number='$quiz_number';";
		$result=mysqli_query($connect,$sql);
		$aye=mysqli_num_rows($result);

		$sql1="SELECT score FROM quiz_score WHERE course='$course' AND student='$username' AND quiz_number='$quiz_number';";
		$result1=mysqli_query($connect,$sql1);
		$aye1=mysqli_num_rows($result1);
		$i=1;
		if($aye>0)
		{
			while(($row=mysqli_fetch_assoc($result)) && ($qw=mysqli_fetch_assoc($result1)))
			{
				
				echo "<tr>
						<td>".$i."</td>".
						"<td>".$quiz_number."</td>".
						"<td>".$qw['score']."/10"."</td>".
						"</tr>";
				$i++;
			}
		}
		else
		{
			header("Location: select_course2.php?course=inv");
		}
	}
?>

</table>

<?php

	include_once 'footer_login.php';
?>