<?php

session_start();

// Check if the user is logged in, if not redirects them to login page.

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Nate Boland">
	<meta name="description" content="A simple file sharing platform, cool people only.">
	<meta name="keywords" content="files, sharing, storage">
	<title>Sharing Is Caring</title>
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome 4 -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
</head>
<body style="background-image: -webkit-linear-gradient(#0F2027, #203A43, #2C5364); padding-top: 50px;">
	<!-- File Upload -->
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="float">
					<h1><b>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>

					<!-- Logout Link -->
					<p class="themelink"><a href="php/logout.php"><span class="fa fa-sign-out"></span> Logout</a></p>
				</div>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>