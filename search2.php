<html>
	<?php
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$std=$_POST['standard'];
	
	$hostname="localhost";
	$username="root";
	$password="Divyesh@123";
	$database="examscore";
	
	$conn=mysqli_connect($hostname,$username,$password,$database);
	
	$query="select * from data where std='$std' && Roll='$roll' && name='$name'";
	
	$res=mysqli_query($conn,$query);
	
			echo "<center><table border='5';height:10>";
		echo "<tr style=background-color:blue;color:white;>
			<th>Name</th>
			<th>Standard</th>
			<th>Exam</th>
			<th>English</th>
			<th>Hindi</th>
			<th>Marathi</th>
			<th>Maths</th>
			<th>Science</th>
			<th>Social Science</th>
			<th>Total Marks</th>
			<th>Percentage</th>
			<th>Delete Record</th>
			<th>Edit Record</th>
			</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo"		
			<tr>
			<td>".$row['name']."</td>
			<td>".$row['std']."</td>
			<td>".$row['exam']."</td>
			<td>".$row['english']."</td>
			<td>".$row['hin']."</td>
			<td>".$row['mar']."</td>
			<td>".$row['math']."</td>
			<td>".$row['sci']."</td>
			<td>".$row['ss']."</td>
			<td>".$row['total']."</td>
			<td>".$row['parcent']."%</td>
			<td><a href='delete.php?id=$row[id]& std=$row[std] & exam=$row[exam]'>Delete</a></td>
			<td><a href='edit3.php?id=$row[id]& name=$row[name] & gender=$row[gender] & mail=$row[mail] & phone=$row[phone] & roll=$row[Roll] & std=$row[std] & exam=$row[exam] & english=$row[english] & hin=$row[hin] & mar=$row[mar] & math=$row[math] & sci=$row[sci] & ss=$row[ss] & total=$row[total] & parcent=$row[parcent] '>Edit</a></td>
			</tr>";
			
	}
		
	echo "</table></center>";
	
	?>
</html>