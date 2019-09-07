<?php
	include_once 'db_connection.php';
	include_once 'header_login.php';


?>

<script type="text/javascript">

	setTimeout(function(){
		document.getElementsByClassName('quiz_form')[0].submit();
	}, 902000);
</script>

<script type="text/javascript">


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;


    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
        if(minutes<1)
        {
        	shake_dah_booty();
        	document.getElementById('time').style.color="rgb(255,0,0)";
        	document.getElementById('time').style.backgroundImage="-webkit-linear-gradient(top,rgb(255,255,255),rgb(240,240,240))";
        	if(seconds%2==0)
        	{
        		document.getElementById('time').style.border="solid rgb(255,0,0) 1px";
        		


        	}
        	else
        	{
        		document.getElementById('time').style.border="solid rgb(0,0,0) 1px";
        		
        	}
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60*15,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>

<p id="time">15:00</p>

<form class="quiz_form" action="submit_attempted_quiz.php?time=over" method="POST">
	<?php
		if(isset($_POST['start_quiz']))
		{
			$access_code=$_SESSION['access_code'];
			$sql="SELECT * FROM quiz WHERE access_code='$access_code'";
			$result=mysqli_query($connect,$sql);
			$quiz=mysqli_fetch_assoc($result);
			echo "<p class='questions'>1. ".$quiz['q1']."</p>";
			echo "<p class='options'>A. ".$quiz['q1_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q1_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q1_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q1_a4']."</p>";
			echo "<select name='correct_option1' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>2. ".$quiz['q2']."</p>";
			echo "<p class='options'>A. ".$quiz['q2_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q2_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q2_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q2_a4']."</p>";
			echo "<select name='correct_option2' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>3. ".$quiz['q3']."</p>";
			echo "<p class='options'>A. ".$quiz['q3_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q3_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q3_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q3_a4']."</p>";
			echo "<select name='correct_option3' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>4. ".$quiz['q4']."</p>";
			echo "<p class='options'>A. ".$quiz['q4_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q4_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q4_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q4_a4']."</p>";
			echo "<select name='correct_option4' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>5. ".$quiz['q5']."</p>";
			echo "<p class='options'>A. ".$quiz['q5_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q5_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q5_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q5_a4']."</p>";
			echo "<select name='correct_option5' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>6. ".$quiz['q6']."</p>";
			echo "<p class='options'>A. ".$quiz['q6_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q6_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q6_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q6_a4']."</p>";
			echo "<select name='correct_option6' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>7. ".$quiz['q7']."</p>";
			echo "<p class='options'>A. ".$quiz['q7_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q7_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q7_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q7_a4']."</p>";
			echo "<select name='correct_option7' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>8. ".$quiz['q8']."</p>";
			echo "<p class='options'>A. ".$quiz['q8_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q8_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q8_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q8_a4']."</p>";
			echo "<select name='correct_option8' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>9. ".$quiz['q9']."</p>";
			echo "<p class='options'>A. ".$quiz['q9_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q9_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q9_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q9_a4']."</p>";
			echo "<select name='correct_option9' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";

			echo "<p class='questions'>10. ".$quiz['q10']."</p>";
			echo "<p class='options'>A. ".$quiz['q10_a1']."</p>";
			echo "<p class='options'>B. ".$quiz['q10_a2']."</p>";
			echo "<p class='options'>C. ".$quiz['q10_a3']."</p>";
			echo "<p class='options'>D. ".$quiz['q10_a4']."</p>";
			echo "<select name='correct_option10' required class='quiz_answer' autocomplete='off'>
    	<option>Option</option>
    	<option value='A'>A</option>
    	<option value='B'>B</option>
    	<option value='C'>C</option>
    	<option value='D'>D</option>
    </select>";
			echo "<hr class='in_quiz'>";
		}
	?>
	<button type="submit" name="submit_attempted_quiz" class="submit_quiz">Submit Quiz</button>
</form>


<?php
	include_once 'footer_login.php';
?>