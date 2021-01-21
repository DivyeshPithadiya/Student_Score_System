<html>

	<div>
	<center>
		<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Student Marks</h1></head>
	</center>
	</div>
	
	<form method="post" action="storeMarks.php">
	
	<center>
		
		<label>English:</label><input type="number" name="eng" required style=height:30;width:300;margin-left:38;margin-top:20;><br>
		<label>Hindi:</label><input type="number" name="hin" required style=height:30;width:300;margin-left:54;margin-top:20;><br>
		<label>Marathi:</label><input type="number" name="mar" required style=height:30;width:300;margin-left:40;margin-top:20;><br>
		<label>Maths:</label><input type="number" name="math" required style=height:30;width:300;margin-left:54;margin-top:20;><br>
		<label>Science:</label><input type="number" name="sci" required style=height:30;width:300;margin-left:45;margin-top:20;><br>
		<label>Social Studies:</label><input type="number" name="ss" required style=height:30;width:300;margin-left:8;margin-top:20;><br>
		
		<?php
		
		if(isset($_GET['message']))
		{
			
			echo "<p style=color:red;>".$_GET['message']."</p>";
		}
		
		?>
		
		<center>
				<button style=padding:8;margin-top:20;width:80;>Submit</button>
		</center>
		
	</center>
	
	</form>

</html>