<html>
	<head>
	<title>
		Admin Login
	</title>

	</head>
	
	<body style=background-color:white;>

        <fieldset  style="width:400 ;margin-top: 250px; margin-left:480">

					<legend><font color="grey" size="6"><center><b>Admin Login</font></b></center></legend>
					<center>
					
					<form method="post" action="validation.php">
					
					<input type="text" name="name" required placeholder="Enter Your Uername" autofocus class="demo7";><br><br>
					<input type="password" required  name="password" placeholder="Enter Your Password" class="demo7">
					
					<?php
						if(isset($_GET['message']))
						{
							echo "<br><br>";
							echo "<font color='red'>";
							echo "$_GET[message]";
							echo "</font>";
						}
					?>
					
					</center>
					
                    <center>
					<button type="submit">Login</button>
					<button type="reset">Reset</button>
                    </center>
					
					</form>
        </fieldset>
	
	</body>
	
</ht