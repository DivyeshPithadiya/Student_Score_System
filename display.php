<html>
<?php require 'navbar.php'?>
<center>
<div style=background-color:grey;height:150;width:400;border-radius:20px;>

	<form method="post" action="display2.php"style=font-size:20;margin-top:50%;padding:15;>
	<label>Records Of Standard:</label>
	<select name="standard" required width="2" style=width:100;height:30;border-radius:10px;>
		<option value=1>FYBSC-CS</option>
		<option value=2>SYBSC-CS</option>
		<option value=3>TYBSC-CS</option>
		<option value=4>FYBSC-IT</option>
		<option value=5>SYBSC-IT</option>
		<option value=6>TYBSC-IT</option>
		<option value=7>FYBMS</option>
		<option value=8>SYBMS</option>
		<option value=9>TYBMS</option>
		
	</select><br>
	
	<label>Enter type of exam:</label>
	<select name="exam" required style=margin-top:10;height:30;border-radius:10px;>
		<option>First Unit Test</option>
		<option>Second Unit Test</option>
		<option>Third Unit Test</option>
		<option>Fourth Unit Test</option>
		<option>First Semester</option>
		<option>Second Semester</option>
	</select>	
	<br>
	<button style=padding:5;margin-top:30;width:80;>Submit</button>
	</form>
</div>
</center>
</html>