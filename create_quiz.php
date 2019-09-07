<?php

	include_once 'header_login.php';
    include_once 'db_connection.php';
	
?>

<form action="submit_quiz.php" method="POST" class="quiz_form">
	<div class="inp_f2">
		<p>Select course :</p>
		<input list="department" name="department" required class="quiz_input" autocomplete="off">
		<datalist id="department">
			<?php

                //$sql1="SELECT course FROM quiz;";
                //$result1=mysqli_query($connect,$sql1);
                

                $sql2="SELECT course_x FROM course;";
                $result2=mysqli_query($connect,$sql2);
                

                while(($course=mysqli_fetch_assoc($result2)))
                {
                    //$temp1=$course_name['course'];
                    $temp2=$course['course_x'];
                    echo "<option value='".$temp2."'></option>";
                }

            ?>
		</datalist>
        <br><br><br>
        <p>Select Quiz :</p>
        <input list="quiz_number" name="quiz_number" required class="quiz_input" autocomplete="off">
        <datalist id="quiz_number">
            <option value="Quiz 1"></option>
            <option value="Quiz 2"></option>
        </datalist>

	</div>

    <!--<div class="inp_f2">
        <p>Select Quiz :</p>
        <input list="quiz_number" name="quiz_number" required class="quiz_input" autocomplete="off">
        <datalist id="quiz_number">
            <option value="Quiz 1"></option>
            <option value="Quiz 2"></option>
        </datalist>
    </div>-->
	
    <br>
  <div class="inp_f2">
    <p>First question :</p>
    <input type="text" name="q1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q1_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q1_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q1_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q1_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option1" required class="quiz_input" autocomplete="off">
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
  <br>
  </div>
    <div class="inp_f2">
    <p>Second question :</p>
    <input type="text" name="q2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q2_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q2_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q2_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q2_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option2" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
  <div class="inp_f2">
    <p>Third question :</p>
    <input type="text" name="q3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q3_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q3_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q3_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q3_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option3" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	
  </div>
<div class="inp_f2">
    <p>Fourth question :</p>
    <input type="text" name="q4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q4_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q4_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q4_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q4_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option4" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
<div class="inp_f2">
    <p>Fifth question :</p>
    <input type="text" name="q5" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q5_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q5_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q5_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q5_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option5" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
<div class="inp_f2">
    <p>Sixth question :</p>
    <input type="text" name="q6" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q6_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q6_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q6_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q6_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option6" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
<div class="inp_f2">
    <p>Seventh question :</p>
    <input type="text" name="q7" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q7_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q7_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q7_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q7_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option7" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
<br>
  </div>
<div class="inp_f2">
    <p>Eighth question :</p>
    <input type="text" name="q8" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q8_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q8_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q8_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q8_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option8" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
<div class="inp_f2">
    <p>Ninth question :</p>
    <input type="text" name="q9" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q9_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q9_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q9_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q9_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option9" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
	<br>
  </div>
<div class="inp_f2">
    <p>Tenth question :</p>
    <input type="text" name="q10" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option A :</p>
    <input type="text" name="q10_a1" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option B</p>
    <input type="text" name="q10_a2" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option C</p>
    <input type="text" name="q10_a3" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Option D</p>
    <input type="text" name="q10_a4" class="quiz_input" required autocomplete="off">
    <br><br>
    <p>Correct option</p>
    <select name="correct_option10" required class="quiz_input" autocomplete="off">
    	
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    </select>
  </div>
<button type="submit" name="submit_quiz" class="submit_quiz">SUBMIT</button>
    </form>

<?php

	include_once 'footer_login.php';
?>