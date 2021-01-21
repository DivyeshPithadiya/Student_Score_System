<html>
	
	<?php
	
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
		if(isset($_GET['std']))
		{
			$std=$_GET['std'];
		}
		if(isset($_GET['exam']))
		{
			$exam=$_GET['exam'];
		}

		$hostname="localhost";
		$username="root";
		$password="Divyesh@123";
		$database="examscore";
		
		$conn=mysqli_connect($hostname,$username,$password,$database);
		
		$query="delete from data where std='$std' && id='$id' && exam='$exam'";
		
		$res=mysqli_query($conn,$query);
		
		header('Location:display2.php?standard='.$std.'& exam='.$exam);

	?>
	
	
	
</html>