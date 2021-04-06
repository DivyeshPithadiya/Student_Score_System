<html>
<?php require 'navbar.php'?>
<div>
	<center>
		<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Update Record</h1></head>
	</center>
	</div>
	
	
	
	<?php
	
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
		
		
		if(isset($_GET['name']))
		{
			$name=$_GET['name'];
			
		}
		if(isset($_GET['mail']))
		{
			$mail=$_GET['mail'];
		}
		if(isset($_GET['phone']))
		{
			$phone=$_GET['phone'];
		}
		if(isset($_GET['roll']))
		{
			$roll=$_GET['roll'];
		}
		
		if(isset($_GET['std']))
		{
			$std=$_GET['std'];
		}
		if(isset($_GET['exam']))
		{
			$exam=$_GET['exam'];
		}
		if(isset($_GET['english']))
		{
			$eng=$_GET['english'];
		}
		if(isset($_GET['hin']))
		{
			$hin=$_GET['hin'];
		}
		if(isset($_GET['mar']))
		{
			$mar=$_GET['mar'];
		}		
		if(isset($_GET['math']))
		{
			$math=$_GET['math'];
		}
		if(isset($_GET['sci']))
		{
			$sci=$_GET['sci'];
		}	
		if(isset($_GET['ss']))
		{
			$ss=$_GET['ss'];
		}		
		if(isset($_GET['total']))
		{
			$total=$_GET['total'];
		}
		if(isset($_GET['parcent']))
		{
			$parcent=$_GET['parcent'];
		}
		if(isset($_GET['gender']))
		{
			$gender=$_GET['gender'];
		}
	
	echo "<div style=font-size:20;>
		<form style=margin-top:60px; method='post'"."action='edit4.php?id=$id'> "; 
			
			echo "<label style=margin-left:20;>Name:</label><input type='text' value='$name' name='name' required style=height:30;width:300;margin-left:40;><br>
			<label style=margin-left:20;>Mail ID:</label><input type='email' value='$mail' name='mail' required style=height:30;width:300;margin-left:26;margin-top:20;><br>
			<label style=margin-left:20;>Phone:</label><input type='number' value=$phone name='phone' required style=height:30;width:300;margin-left:40;margin-top:20;><br>
			<label style=margin-left:20;>Gender:</label>";
			
			if(strncmp($gender,'male',4)==0)
			{
			echo "
			<input type='radio' name='gender' value='male' required checked style=;margin-left:30;margin-top:20;>Male
			<input type='radio' name='gender' value='Female' required style=margin-left:40;margin-top:20;>Female
			<input type='radio' name='gender' value='other' required style=margin-left:40;margin-top:20;>Other
			<br>
			";
			}
			if(strncmp($gender,'female',6)==0)
			{
			echo "
			<input type='radio' name='gender' value='male' required style=;margin-left:30;margin-top:20;>Male
			<input type='radio' name='gender' value='Female' required checked style=margin-left:40;margin-top:20;>Female
			<input type='radio' name='gender' value='other' required style=margin-left:40;margin-top:20;>Other
			<br>
			";
			}
			if(strncmp($gender,'other',5)==0)
			{
			echo "
			<input type='radio' name='gender' value='male' required style=;margin-left:30;margin-top:20;>Male
			<input type='radio' name='gender' value='Female' required style=margin-left:40;margin-top:20;>Female
			<input type='radio' name='gender' value='other' checked required style=margin-left:40;margin-top:20;>Other
			<br>
			";
			}
			
			
			
			
			echo "<label style=margin-left:20;>RollNo:</label><input type='number' value=$roll name='roll' required style=height:30;width:300;margin-left:32;margin-top:20;><br>
			<label style=margin-left:20;>Standard:</label>";
			if($std==1)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1 selected>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==2)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2 selected>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==3)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3 selected>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}if($std==4)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3 >TYBSC-CS</option>
			<option value=4 selected>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==5)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5 selected>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==6)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6 selected>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==7)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7 selected>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==8)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8 selected>SYBMS</option>
			<option value=9>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==9)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9 selected>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			if($std==10)
			{
			
			echo "<select name='std' value='$std' required style=height:30;width:300;margin-left:15;margin-top:20;>
			
			<option value=1>FYBSC-CS</option>
			<option value=2>SYBSC-CS</option>
			<option value=3>TYBSC-CS</option>
			<option value=4>FYBSC-IT</option>
			<option value=5>SYBSC-IT</option>
			<option value=6>TYBSC-IT</option>
			<option value=7>FYBMS</option>
			<option value=8>SYBMS</option>
			<option value=9 selected>TYBMS</option>
			
			</select><br>
			
			<label style=margin-left:20;>Exam:</label>"
			;
			}
			
			if(strncmp($exam,"First Unit Test",15)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' selected>First Unit Test</option>
				<option value='Second Unit Test'>Second Unit Test</option>
				<option value='Third Unit Test'>Third Unit Test</option>
				<option value='Fourth Unit Test'>Fourth Unit Test</option>
				<option value='First Semester'>First Semester</option>
				<option value='Second Semester'>Second Semester</option>
			
			</select>";
			}
			
			if(strncmp($exam,"Second Unit Test",16)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' >First Unit Test</option>
				<option value='Second Unit Test' selected>Second Unit Test</option>
				<option value='Third Unit Test'>Third Unit Test</option>
				<option value='Fourth Unit Test'>Fourth Unit Test</option>
				<option value='First Semester'>First Semester</option>
				<option value='Second Semester'>Second Semester</option>
			
			</select>";
			}
			
			if(strncmp($exam,"Third Unit Test",15)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' >First Unit Test</option>
				<option value='Second Unit Test'>Second Unit Test</option>
				<option value='Third Unit Test' selected>Third Unit Test</option>
				<option value='Fourth Unit Test'>Fourth Unit Test</option>
				<option value='First Semester'>First Semester</option>
				<option value='Second Semester'>Second Semester</option>
			
			</select>";
			}
			if(strncmp($exam,"Fourth Unit Test",16)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' >First Unit Test</option>
				<option value='Second Unit Test' >Second Unit Test</option>
				<option value='Third Unit Test'>Third Unit Test</option>
				<option value='Fourth Unit Test' selected>Fourth Unit Test</option>
				<option value='First Semester'>First Semester</option>
				<option value='Second Semester'>Second Semester</option>
			
			</select>";
			}
			
			if(strncmp($exam,"First Semester",15)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' >First Unit Test</option>
				<option value='Second Unit Test' >Second Unit Test</option>
				<option value='Third Unit Test'>Third Unit Test</option>
				<option value='Fourth Unit Test'>Fourth Unit Test</option>
				<option value='First Semester' selected>First Semester</option>
				<option value='Second Semester'>Second Semester</option>
			
			</select>";
			}
			
			if(strncmp($exam,"Second Semester",15)==0)
			{
			echo "<select name='exam' required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value='First Unit Test' >First Unit Test</option>
				<option value='Second Unit Test' >Second Unit Test</option>
				<option value='Third Unit Test'>Third Unit Test</option>
				<option value='Fourth Unit Test'>Fourth Unit Test</option>
				<option value='First Semester'>First Semester</option>
				<option value='Second Semester' selected>Second Semester</option>
			
			</select>";
			}

	echo "<div style=position:absolute;top:165;margin-left:20;left:500;display:block;>
		
		<label>Subject 1:</label><input type='number' value=$eng name='eng' required style=height:30;width:300;margin-left:50;margin-top:20;><br>
		<label>Subject 2:</label><input type='number' name='hin' value=$hin required style=height:30;width:300;margin-left:50;margin-top:20;><br>
		<label>Subject 3:</label><input type='number' name='mar' value=$mar required style=height:30;width:300;margin-left:50;margin-top:20;><br>
		<label>Subject 4:</label><input type='number' name='math' value=$math required style=height:30;width:300;margin-left:50;margin-top:20;><br>
		<label>Subject 5:</label><input type='number' name='sci' value=$sci required style=height:30;width:300;margin-left:50;margin-top:20;><br>
		<label>Subject 6:</label><input type='number' name='ss' value=$ss required style=height:30;width:300;margin-left:50;margin-top:20;><br>
	
		</div>	
</div>

<div style=padding:8;margin-top:20;margin-left:600;width:80;>
	<button >Submit</button>

</form>";	
?>
</html>