<?php
echo "<html> <body>";
$P_ID = $_POST['P_ID'];

#$P_NAME = $_POST['P_Name'];
#$P_COST = $_POST['P_COST'];


include("dataconfig.php");

$selectsql = "SELECT * FROM products WHERE Product_ID = '$P_ID'";

$conn->query($selectsql);
$result_doc = $conn->query($selectsql);
$row = $result_doc->fetch_assoc();

$P_ID = $row["Product_ID"];
$P_Name = $row["Product_Name"];
$P_Cost = $row["Product_Cost"];

$conn->close();





?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- fonts link -->
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/checkout.css">


	<!-- favicon link -->
	<link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">

	<title>Corona War|Admin Page</title>
</head>

<body>
	<header class="fixed-top">
		<div class="container">
			<!-- navbar start -->
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand l_img" href="index.php">
					<img class="img-fluid" src="images/logo.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse menu" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item border rounded-pill border-warning float-left">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- navbar end -->
		</div>
	</header>
	<!-- cases start -->
	<section>
		<div class="container2">
			<form id="contact" action="product_checkout_confirmation.php" method="post">
				<?php
				echo '<br>Your Order of ' . $P_Name . ' is ready. <br>Total Price is:  Tk' . $P_Cost . ' <br>Please fill out the details below <br></br>';
				?>
				<fieldset>
					<input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
				</fieldset>
				<fieldset>
					<input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
				</fieldset>
				<fieldset>
					<input placeholder="Address:" name="address" type="text" tabindex="3" required>
				</fieldset>
				<fieldset>
					<button name="submit" type="submit" id="contact-submit">Submit</button>
				</fieldset>
			</form>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row" style="padding-bottom: 50px;">

				<div class="col-lg-3 col-sm-12 col-12 coronawar">
					<h3>Corona<span>War</span></h3>
					<p>This interactive dashboard/map provides the latest global numbers and numbers by country of COVID-19 cases on a daily basis.</p>
				</div>
				<div class="offset-lg-1 col-lg-1 offset-md-2 col-md-1 offset-sm-2  col-sm-2 offset-1 col-5 f_contact">
					<ul class="list-unstyled">
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#prenention">Prevention</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#">Member</a></li>
					</ul>
				</div>

				<div class="offset-md-1 col-md-1 offset-md-1 col-md-1 offset-sm-0 col-sm-2 offset-1 col-4 f_contact">
					<ul class="list-unstyled">
						<li><a href="#faq">Faq</a></li>
						<li><a href="#">Check Symptoms</a></li>
						<li><a href="index.php">Experts</a></li>
					</ul>
				</div>

				<div class="offset-lg-1 col-lg-2 offset-md-1 col-md-3 offset-sm-0  col-sm-3 offset-1 col-5 f_contact">
					<ul class="list-unstyled">
						<li><a href="index.php">Live Report</a></li>
						<li><a href="index.php">Todays Death</a></li>
						<li><a href="index.php">Total Recovered</a></li>
						<li><a href="index.php">Todays Effected</a></li>
					</ul>
				</div>

				<div class="offset-lg-0 col-lg-1 offset-md-0 col-md-2 offset-sm-0  col-sm-2 offset-1  col-4 f_contact">
					<ul class="list-unstyled">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Youtube</a></li>
						<li><a href="#">Linked In</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
				</div>

			</div>
			<div class="row designed">
				<div class="col-12">
					<h2>Designed by <a href="#" target="_blank">CoronaWar Team</a></h2>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>