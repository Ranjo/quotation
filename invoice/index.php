<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<style type="text/css">
	.cent{
		width: 30%;
		padding-top: 200px; 
	}
	.btnn{
		width: 50%;
		float: left;

	}
</style>
<body>
	<div>
		<div class="container cent">
		<fieldset class="w3-padding w3-pannel">
				<form method="POST" action="config/logincon.php">
					<div class="form-group">
						<input class="form-control" required type="text" name="username" placeholder="Usename">
					</div>
					<div class="form-group">
						<input class="form-control" required type="password" name="pswd" placeholder="Password">
					</div>
					<div class="form-group " align="center">
						<input type="submit" name="sub" class="btn btn-block btn-success  btnn" value="Login">
						<input type="submit" name="fgtpsw"  class="btn btn-block btn-danger btnn" value="Forgot Password" >
					</div>

				</form>
			</fieldset>
		</div>
	</div>
</body>
</html>