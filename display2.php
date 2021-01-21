<html>
	<?php
	
	if(isset($_POST['standard']))
	{
	$standard=$_POST['standard'];
	$exam=$_POST['exam'];
	}
	else
	{
		if(isset($_GET['standard']))
		{
		$standard=$_GET['standard'];
		$exam=$_GET['exam'];
		}
	}
	
	
	
	echo	"<div>
	<center>
		<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Student Record of Standard ".$standard."</h1></head>
	</center>
	</div>";
	
	$hostname="localhost";
	$username="root";
	$password="Divyesh@123";
	$database="examscore";
	
	$conn=mysqli_connect($hostname,$username,$password,$database);
	
	$query="select * from data where std='$standard' && exam='$exam' order by roll";
	
	$res=mysqli_query($conn,$query);
	
	
			echo "<center><table border='5'>";
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
		
		
echo "</table></center><br>";
		
echo "<center><div>";
		

	
	$q1="select * from data where std='$standard' && exam='$exam' && (parcent>80 || parcent=80)"; //query for Rankers
	$r1=mysqli_query($conn,$q1);
	
	$q4="select count(*) as count from data where std='$standard' && exam='$exam' && (parcent>80 || parcent=80)"; //query for total Rankers
	$r4=mysqli_query($conn,$q4);
	$ro4=mysqli_fetch_array($r4);
	$temp1=$ro4['count']+1;
	echo "<table border=5px>
	<tr>
		<th style=padding:5px;>Rankers</th>
		
		<th rowspan=".$temp1." width='100px'>Total=".$ro4['count']."</th>
	</tr>";
	
	while($ro1=mysqli_fetch_array($r1))
	{
		echo "<tr>
			<td  style=padding:5px;>".$ro1['name']."</td></tr>";
	}
	echo "</table><br>";
	
	
	$q2="select * from data where std='$standard' && exam='$exam' && (parcent>40 && parcent<80)"; //query for achivers
	$r2=mysqli_query($conn,$q2);
	
	
	$q5="select count(*) as count from data where std='$standard' && exam='$exam' && (parcent>40 && parcent<80)"; //query for total achivers
	$r5=mysqli_query($conn,$q5);
	$ro5=mysqli_fetch_array($r5);
	$temp2=$ro5['count']+1;
	
	
	
	echo "<table border=5px>
	<tr>
		<th  style=padding:5px;>Achievers</th>
		<th rowspan=".$temp2." width='100px'>Total=".$ro5['count']."</th>

	</tr>";
	
	while($ro2=mysqli_fetch_array($r2))
	{
		echo "<tr>
			<td  style=padding:5px;>".$ro2['name']."</td></tr>";
	}
	
	echo "</table><br>";
	
	$q3="select * from data where std='$standard' && exam='$exam' && parcent<40";
	$r3=mysqli_query($conn,$q3);
	
	$q6="select count(*) as count from data where std='$standard' && exam='$exam' && parcent<40"; //query for total defaulters
	$r6=mysqli_query($conn,$q6);
	$ro6=mysqli_fetch_array($r6);
	
	$temp3=$ro6['count']+1;
	
	echo "<table border=5px>
	<tr>
		<th  style=padding:5px;>Defaulters</th>
		<th rowspan=".$temp3." width='100px'>Total=".$ro6['count']."</th>
	</tr>";
	
	while($ro3=mysqli_fetch_array($r3))
	{
		echo "<tr>
			<td style=padding:5px;>".$ro3['name']."</td></tr>";
	}
	
	echo "</table>";

echo "</div></center>"
	?>
	
	
	
	

	<center>
	
	<form method='post' <?php echo "action='display3.php?std=$standard & exam=$exam' ";?>  style=font-size:20;margin-top:2%;padding:15;>
	
	<label>Sort According to:</label>
	
	<select name="sort" required style=margin-top:10;height:30;border-radius:10px;>
		<option>English</option>
		<option>Hindi</option>
		<option>Marathi</option>
		<option>Maths</option>
		<option>Science</option>
		<option>Social Science</option>
		<option>Total Marks</option>
		<option>Percentage</option>
	</select><br>	

	<button style=padding:5;margin-top:10;width:80;>Submit</button>
	
	
	</form>
	
	</center>

</html>