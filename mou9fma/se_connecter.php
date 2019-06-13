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
    <title>Connexion</title>

    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/mainlogin.css">


        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>

        <link href="images/icon2.ico" rel="shortcut icon">
        <link href="images/icon57.png" rel="small icon">
        <link href="images/icon72.png" sizes="72x72" rel="medium icon">
        <link href="images/icon114.png" sizes="114x114" rel="big icon">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link rel="icon" type="image/x-icon" href="img/icon2.ico">

    </head>

<body data-spy="scroll" data-target="#navbar" data-offset="120">

    <div id="header">
        <div class="bg-overlay"></div>

                            <div class="center text-center">
                                <h2 align="center"><a href="loginemp.php"><img alt="User Pic" src="img/signupimg/employe.png"  class="img-circle img-responsive" width="150" height="150"></a></h2>
                                <h1><a href="loginemp.php">Professionnel</a></h1>
                        
                                <h2 align="center"><a href="loginmem.php"><img alt="User Pic" src="img/signupimg/membre.png"  class="img-circle img-responsive" width="150" height="150"></a></h2>
                              <h1><p align="center"><a href="loginmem.php">Membre</a></p></h1>
                            </div>

                
                    </div>

    
    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright Mou9ef.ma 2018
                    <br/>Theme By <a class="themeBy" href="">iDesign Club</a>
                </div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="https://www.facebook.com/mou9ef.ma/" class="fa fa-facebook-square tooltipped" title=""></a> 
                        <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                        <a href="https://plus.google.com/u/1/109963354392722484094" class="fa fa-google-plus-square tooltipped" title=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
