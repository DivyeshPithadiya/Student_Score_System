<html>

	<?php
		
		
		session_start(); 
		
		$hostname="localhost";
		$username="root";
		$password="Divyesh@123";
		$database="examscore";
		$conn=mysqli_connect($hostname,$username,$password,$database);
		
						
		if($_SESSION['exam']=="First Unit Test" || $_SESSION['exam']=="Second Unit Test" || $_SESSION['exam']=="Third Unit Test" || $_SESSION['exam']=="Fourth Unit Test")
		{
			if($_SESSION['eng']>20 || $_SESSION['hin']>20 || $_SESSION['mar']>20 || $_SESSION['math']>20 || $_SESSION['sci']>20 || $_SESSION['ss']>20)
			{
				header('Location:ExamScore.php?message=Marks should be less than 20');
			}
			
			else
			{
				
				$name=$_SESSION['name'];
				$mail=$_SESSION['mail'];
				$phone=$_SESSION['phone'];
				$gender=$_SESSION['gender'];
				$Roll=$_SESSION['roll'];
				$std=$_SESSION['std'];
				$exam=$_SESSION['exam'];
				$english=$_SESSION['eng'];
				$hin=$_SESSION['hin'];
				$mar=$_SESSION['mar'];
				$math=$_SESSION['math'];
				$sci=$_SESSION['sci'];
				$ss=$_SESSION['ss'];
				
				$total=($english + $hin + $mar + $math +$sci + $ss);
				
				$percent=($total * 100)/120;
				
				$query = "insert into data(name,mail,phone,gender,Roll,std,exam,english,hin,mar,math,sci,ss,total,parcent) value('$name','$mail','$phone','$gender','$Roll','$std','$exam','$english','$hin','$mar','$math','$sci','$ss','$total','$percent')";
								
				$res=mysqli_query($conn,$query);
				
				
				
				header('Location:index.php?message=Student Record Added');

				
			}
		}
		
		else
		{
			if($_SESSION['eng']>100 || $_SESSION['hin']>100 || $_SESSION['mar']>100 || $_SESSION['math']>100 || $_SESSION['sci']>100 || $_SESSION['ss']>100)
			{
				header('Location:ExamScore.php?message=Marks should be less than 100');
			}
			
			else
			{
				$hostname="localhost";
				$username="root";
				$password="Divyesh@123";
				$database="examscore";
				$conn=mysqli_connect($hostname,$username,$password,$database);
				
				$name=$_SESSION['name'];
				$mail=$_SESSION['mail'];
				$phone=$_SESSION['phone'];
				$gender=$_SESSION['gender'];
				$Roll=$_SESSION['roll'];
				$std=$_SESSION['std'];
				$exam=$_SESSION['exam'];
				$english=$_SESSION['eng'];
				$hin=$_SESSION['hin'];
				$mar=$_SESSION['mar'];
				$math=$_SESSION['math'];
				$sci=$_SESSION['sci'];
				$ss=$_SESSION['ss'];
				
				$total=($english + $hin + $mar + $math +$sci + $ss);				
				
				$percent=($total * 100)/600;
				
				$query = "insert into data(name,mail,phone,gender,Roll,std,exam,english,hin,mar,math,sci,ss,total,parcent) value('$name','$mail','$phone','$gender','$Roll','$std','$exam','$english','$hin','$mar','$math','$sci','$ss','$total','$percent')";
			
				$res=mysqli_query($conn,$query);
				
				header('Location:index.php?message=Student Record Added');

			
		
			}
			
		}
		
		
	?>
	
</html>