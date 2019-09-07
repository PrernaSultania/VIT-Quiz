<?php
	include_once 'header_login.php';
	include_once 'db_connection.php';
	
	if(isset($_POST['submit_attempted_quiz']) || $_GET['time']=="over")
	{
		$stud_answer=array($_POST['correct_option1'],$_POST['correct_option2'],$_POST['correct_option3'],$_POST['correct_option4'],$_POST['correct_option5'],$_POST['correct_option6'],$_POST['correct_option7'],$_POST['correct_option8'],$_POST['correct_option9'],$_POST['correct_option10']);
		$access_code=$_SESSION['access_code'];
		$sql="SELECT correct_option1,correct_option2,correct_option3,correct_option4,correct_option5,correct_option6,correct_option7,correct_option8,correct_option9,correct_option10 FROM quiz WHERE access_code='$access_code';";
		$result=mysqli_query($connect,$sql);
		$corr_answer=mysqli_fetch_assoc($result);
		$i=0;
		$score=0;
		foreach ($corr_answer as $ans) 
		{
			if($ans==$stud_answer[$i])
			{
				$score++;
			}
			$i++;
		}
		
		$sql1="UPDATE quiz_score SET score=$score,accessed_or_not=1 WHERE access_code='$access_code';";
		mysqli_query($connect,$sql1);







	}

	
	
?>



<div class="show_score">
	<p class="title_div">Your score :</p>

	<?php
		echo "<p class='f_score'>".$score."/10</p>";
	?>
	
	
</div>

<?php

	include_once 'footer_login.php';
?>