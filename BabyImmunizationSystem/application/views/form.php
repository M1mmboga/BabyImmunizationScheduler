<!DOCTYPE html>
<html>
<head>
	<title>Baby immunization Login</title>
	<style type="text/css">
	body{
		background-image: url(<?php echo base_url() ?>assets/images/baby3.jpg);
		background-position: cover;

	}
		form{
			padding-bottom: 220px;
			text-align: center;
			font-size: 30px;
		}
		input{
			width: 250px;
			height: 40px;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<h1><b>Login Page <hr><i></i></h1></b>
	<header><b><p style="font-size: 25px;">Baby Immunization<img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo" style="width:100px; border-radius: 0; margin-left: 10px;"></p></b></header><br><br><br>

	
	<form method="post" action="login.php">
Username :<input type="text" name="username"><br><br>
Password :<input type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>
<footer style="background-color: lightblue;">
		<p>HOME, ABOUT, SERVICES,CONTACT US,LOGIN</p>
		<p><b>Copyright &copy; 2018. Baby Immunization Scheduler</b> </p>
	</footer>
</body>
</html>