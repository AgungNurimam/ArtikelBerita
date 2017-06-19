<?php
	ob_start();
	session_start();
	include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="error">
	<?php
		if (isset($_POST['submit'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cekuser="SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$q_cekuser=mysql_query($cekuser)or die(mysql_error());

			//Ketika username ditemukan
			if (mysql_num_rows($q_cekuser)>0) {
				//Meregistrasikan niai kedalam var
				$_SESSION['user']=$username;
				$_SESSION['login']=TRUE;

				//redirect ke halaman index
				header('location:index.php');
			}
			else{
				echo "<script> alert ('Username atau Password salah!!!');</script>";
			}
			
		}
	?>

	</div>
	<div id="container" align="center">
		<h1>Login Form</h1>
		<form name="login-form" action="" method="post">
			<p><input type="text" name="username" id="username" placeholder="Username"></p>
			<p><input type="password" name="password" id="password" placeholder="Password"></p>
			<p><input type="submit" name="submit" value="Login"></p>
		</form>
	</div>
</body>
</html>