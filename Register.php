<?php
include 'server.php';
include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<h3 style="text-align: center;"><a href="login.php" class="active" id="login-form-link" style="font-family: 'Cabin', sans-serif;color: #212121;text-decoration: none;">Login</a></h3>
							</div>
							<div class="col-xs-6">
								<h3 style="text-align: center;"><a href="register.php" id="register-form-link" style="font-family: 'Cabin', sans-serif; color:#00695c;text-decoration: none;">Register</a></h3>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" action="register.php" role="form" style="display: block;">
									<?php include 'errors.php';?>
									<div class="form-group">
										<input type="text" name="contact" id="contact" tabindex="1" class="form-control" placeholder="Contact" value="<?php echo $contact?>">
									</div>
									<div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="<?php echo $name?>">
									</div>
									<div class="form-group">
										<input type="password" name="password_1" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="password_2" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
								<?php  include('errors.php')?>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-5">
												<button type="submit" name="reg_user" id="register-submit" tabindex="4" style="opacity:0.8;color: #ffffff;background-color: #263238;border-radius: 3px;padding: 2% 5%;" >Register Now</button>
											</div>
										</div>
									</div>
								</form>
	

</body>
</html>