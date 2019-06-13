<?php
session_start();
$_SESSION['message']="";
include("connection.php");
global $db;

function secureInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST['submit'])) {

  if (empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['message']= "email or password or both are empty !!";

  }else {
    $email = $db->real_escape_string($_POST['email']);
    $password = md5($_POST['password']);
    $sql = "SELECT * from users WHERE email = '$email' AND password = '$password'; ";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result)> 0) {
      $_SESSION['email'] = $email;
                header("location:index.php");

    }else {
      $_SESSION['message']="wrong username or password.";
    }
  }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>MOU9EF - Connexion</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="css/co-font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/co-style.css" />
    <link rel="icon" type="image/x-icon" href="img/icon2.ico">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->

</head>

<body>

	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>MOU9EF</h1>
			</div>
			<h2>Voulez vous se connecter autant que</h2>
			<a href="loginmem.php" class="contact-btn">Membre</a>
			<a href="loginemp.php" class="contact-btn">Professionnel</a>
			<div class="notfound-social">
				<a href="https://www.facebook.com/mou9ef.ma/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="https://plus.google.com/u/1/109963354392722484094" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
