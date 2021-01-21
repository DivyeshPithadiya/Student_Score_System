<html>
	<div>
	<center>
		<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Exam Score Management</h1></head>
	</center>
	</div>
	
	<center>
	
		<h2 style=color:brown;margin-top:30;>Student Details</h2>
	
	</center>
	
	<div style=font-size:20;>
		<form style=margin-top:40px; method="post" action="storeData.php">
			
			<label style=margin-left:460;>Name:</label><input type="text" name="name" required style=height:30;width:300;margin-left:40;><br>
			<label style=margin-left:460;>Mail ID:</label><input type="email" name="mail" required style=height:30;width:300;margin-left:26;margin-top:20;><br>
			<label style=margin-left:460;>Phone:</label><input type="number" name="phone" required style=height:30;width:300;margin-left:40;margin-top:20;><br>
			<label style=margin-left:460;>Gender:</label><input type="radio" name="gender"value="male" required style=;margin-left:30;margin-top:20;>Male<input type="radio" name="gender" value="Female" required style=margin-left:40;margin-top:20;>Female<input type="radio" name="gender"value="other" required style=;margin-left:40;margin-top:20;>Other<br>
			<label style=margin-left:460;>RollNo:</label><input type="number" name="roll" required style=height:30;width:300;margin-left:32;margin-top:20;><br>
			<label style=margin-left:460;>Standard:</label>
			<select name="std" required style=height:30;width:300;margin-left:15;margin-top:20;>
			
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			
			</select><br>
			
			<label style=margin-left:460;>Exam:</label>
			<select name="exam" required style=height:30;width:300;margin-left:40;margin-top:20;>
			
				<option value="First Unit Test">First Unit Test</option>
				<option value="Second Unit Test">Second Unit Test</option>
				<option value="Third Unit Test">Third Unit Test</option>
				<option value="Fourth Unit Test">Fourth Unit Test</option>
				<option value="First Semester">First Semester</option>
				<option value="Second Semester">Second Semester</option>
			
			</select>
			
			<?php
		
				if(isset($_GET['message']))
				{
					
					echo "<center><p style=color:red;>".$_GET['message']."</p></center>";
				}
				if(isset($_GET['message1']))
				{
					
					echo "<center><p style=color:red;>".$_GET['message1']."</p></center>";
				}
		
			?>
			
			<center>
				<button style=padding:8;margin-top:20;width:80;>Submit</button>
			<center>
			
		</form>
		
		<div style=background-color:grey;position:absolute;top:65;left:9;height:550;width:200;>
		
			<a  href="display.php" style=text-decoration:none;color:white;><p style=margin-top:250;>Display/Edit/Delete Records</p></a>
			<a  href="search.php" style=text-decoration:none;color:white;><p>Search Record</p></a>
	
		</div>
		
	</div>

</html>