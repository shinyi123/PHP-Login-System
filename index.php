<?php
session_start();
if (!isset($_SESSION['contact'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['contact']);
	header('location:login.php');
}
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<?php if (isset($_SESSION['success'])) : ?> 
	<div class="error_success">
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
<?php endif ?>
<!-- <div class="wrapper">
	<div class="row">
		<div class="col-10">
			
		</div>
	</div>
</div> -->


</body>
</html>