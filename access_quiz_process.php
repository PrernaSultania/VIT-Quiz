<?php

	include_once 'db_connection.php';
	session_start();
	if(isset($_POST['check_ac']))
	{
		$entered_ac=$_POST['access_code'];
		$sql="SELECT access_code FROM quiz WHERE access_code='$entered_ac'";
		$result=mysqli_query($connect,$sql);

		
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['access_code']=$entered_ac;
			$username=$_SESSION['username'];
  			$sqlx="SELECT accessed_or_not FROM quiz_score WHERE access_code='$entered_ac' and student='$username';";
  			$resultx=mysqli_query($connect,$sqlx);

  			if(mysqli_num_rows($resultx))
  			{
  				if(mysqli_fetch_assoc($resultx)['accessed_or_not'])
  				{
  					header("Location: access_quiz.php?ac=over");
  				}
  				else
  				{
  					header("Location: quiz_rules.php");
  				}
			}
			else
			{
				$sqlx="SELECT course FROM quiz WHERE access_code='$entered_ac';";
				$resultx=mysqli_query($connect,$sqlx);

				$sqly="SELECT faculty FROM quiz WHERE access_code='$entered_ac';";
				$resulty=mysqli_query($connect,$sqly);


				$sqlz="SELECT quiz_number FROM quiz WHERE access_code='$entered_ac';";
				$resultz=mysqli_query($connect,$sqlz);

				$course=mysqli_fetch_assoc($resultx)['course'];
				$faculty=mysqli_fetch_assoc($resulty)['faculty'];
				$quiz_number=mysqli_fetch_assoc($resultz)['quiz_number'];

				$student=$_SESSION['username'];
				$sql1="INSERT INTO quiz_score(student,access_code,course,faculty,quiz_number) VALUES('$student','$entered_ac','$course','$faculty','$quiz_number');";
	    		mysqli_query($connect,$sql1);
				header("Location: quiz_rules.php");
			}
		}
		else
	    {
			header("Location: access_quiz.php?ac=wrong");
	    }
	}
	
	?>