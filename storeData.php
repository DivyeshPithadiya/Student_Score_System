<html>
	<?php
		session_start();
		
		
		
		$_SESSION['name']=$_POST['name'];
		$_SESSION['mail']=$_POST['mail'];
		$_SESSION['phone']=$_POST['phone'];
		$_SESSION['gender']=$_POST['gender'];
		$_SESSION['roll']=$_POST['roll'];
		$_SESSION['std']=$_POST['std'];
		$_SESSION['exam']=$_POST['exam'];

		$hostname="localhost";
		$username="root";
		$password="Divyesh@123";
		$database="examscore";
		$conn=mysqli_connect($hostname,$username,$password,$database);
		
		$query="SELECT count(id) as count FROM data";
		$qu="select * from data";
		
		$res=mysqli_query($conn,$query);
		
		$re=mysqli_query($conn,$qu);
		
		while($row=mysqli_fetch_array($res))
		{
				if($row['count']==0)
				{

				header('Location:ExamScore.php');
						
				}
		}
		while($ro=mysqli_fetch_array($re))
		{
			if(($ro['Roll']==$_SESSION['roll']) && ($ro['exam']==$_SESSION['exam']) && ($ro['std']==$_SESSION['std']) )
			{
				header('Location:index.php?message1=Record already Exist');
			}
			
			else
			{
				header('Location:ExamScore.php');
			}
		}	
		
	
	?>
</html>