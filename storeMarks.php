<html>
	<?php
		session_start();
		
		$_SESSION['eng']=$_POST['eng'];
		$_SESSION['hin']=$_POST['hin'];
		$_SESSION['mar']=$_POST['mar'];
		$_SESSION['math']=$_POST['math'];
		$_SESSION['sci']=$_POST['sci'];
		$_SESSION['ss']=$_POST['ss'];
		
		echo $_SESSION['gender'];
		
		header('Location:insert.php');
	?>
</html>