<html>
	<?php
	
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$roll=$_POST['roll'];
	$std=$_POST['std'];
	$exam=$_POST['exam'];
	
	$eng=$_POST['eng'];
	$hin=$_POST['hin'];
	$mar=$_POST['mar'];
	$math=$_POST['math'];
	$sci=$_POST['sci'];
	$ss=$_POST['ss'];
	
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	}
	
	$hostname="localhost";
	$username="root";
	$password="Divyesh@123";
	$database="examscore";
	
					
	if($exam=="First Unit Test" || $exam=="Second Unit Test" || $exam=="Third Unit Test" || $exam=="Fourth Unit Test")
		{
			if($eng>20 || $hin>20 || $mar>20 || $math>20 || $sci>20 || $ss>20)
			{
			echo "<center>
					<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;margin-top:25%;>Marks should be less than 20</h1></head>
				</center>
				</div>";	

			}
			else{
				$total=($eng+ $hin + $mar + $math +$sci + $ss);
							
				$percent=($total * 100)/120;
				
				$conn=mysqli_connect($hostname,$username,$password,$database);

				$query="update data set name='$name' , mail='$mail' ,phone='$phone',gender='$gender',Roll='$roll',std='$std',exam='$exam',english='$eng',hin='$hin',mar='$mar',math='$math',sci='$sci',ss='$ss',total='$total',parcent='$percent'  where id='$id' ";
				
				$res=mysqli_query($conn,$query);
				
				
				echo "<center>
					<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Record Updated</h1></head>
				</center>
				</div>";
				}
		}
	
	else
	{
		if($eng>100 || $hin>100 || $mar>100 || $math>100 || $sci>100 || $ss>100)
			{
				echo "<center>
						<h1 style=color:white;background-color:grey;word-spacing:3;padding:8; margin-top:25%;>Marks should be less than 100</h1></head>
					</center>
					</div>";
	
			}
			else
			{
				$total=($eng + $hin + $mar + $math +$sci + $ss);
							
				$percent=($total * 100)/600;
				
				$conn=mysqli_connect($hostname,$username,$password,$database);
				
				$query="update data set name='$name' , mail='$mail' ,phone='$phone',gender='$gender',Roll='$roll',std='$std',exam='$exam',english='$eng',hin='$hin',mar='$mar',math='$math',sci='$sci',ss='$ss',total='$total',parcent='$percent'  where id='$id' ";
				
				$res=mysqli_query($conn,$query);
				
				
				echo "<center>
					<h1 style=color:white;background-color:grey;word-spacing:3;padding:8;>Record Updated</h1></head>
				</center>
				</div>";
			}	
	}
		
	
	
	
	?>
</html>