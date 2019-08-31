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
<body style="background-image: -webkit-linear-gradient(#f4c4f3, #fc67fa);">
	<?php include("php/nav.php"); ?>
	<!-- File Upload -->
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="float">
					<div class="row">
						<div class="col-md-3">
							<h5><b>add a file</b></h5>
						</div>
						<div class="col-md-9">
							<form>
								<div class="row">
									<div class="col-md-6">
										<input type="file"  name="datafile" size="40">
									</div>
									<div class="col-md-6">
										<input type="submit" class="btn btn-theme btn-block" value="Upload">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Files -->
	<div class="row" style="padding-top: 15px;">
		<div class="container">
			<div class="col-md-12">
				<div class="float"> 
					<div class="row" style="padding-top:10px;">
						<div class="col-md-1" style="margin-bottom: 0px;" align="center"><span class="fa fa-file"></span></div>
						<div class="col-md-6">NathanBolandResume.pdf</div>
						<div class="col-md-5">
							<div class="row" style="float:right ">
								<div class="container">
									<ul class="list-inline">
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-eye"></span></a></li>
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-download"></span></a></li>
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-trash"></span></a></li>
									<ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr style="padding: 0px; margin: 0px;">
						</div>
					</div>

					<div class="row" style="padding-top:10px;">
						<div class="col-md-1" style="margin-bottom: 0px;" align="center"><span class="fa fa-file"></span></div>
						<div class="col-md-6">NathanBolandResume.pdf</div>
						<div class="col-md-5">
							<div class="row" style="float:right ">
								<div class="container">
									<ul class="list-inline">
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-eye"></span></a></li>
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-download"></span></a></li>
										<li class="list-inline-item themelink"><a href=""><span class="fa fa-trash"></span></a></li>
									<ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr style="padding: 0px; margin: 0px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>