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
    $sql = "SELECT * from signupmem WHERE email = '$email' AND password = '$password'; ";
    $ins = "insert into loginmem (email,password) values ('$email','$password')";
        if ($db->query($ins) === true) {
          $_SESSION['message']= "Registration Successful.";
        }else {
            $_SESSION['message']= "user could not be added to database";
                }
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result)) {
      $_SESSION['email'] = $email;
                header("location:error/error.php");
    }else {
      $_SESSION['message']="wrong username or password.";
    }
  }
}





?>


<!DOCTYPE html>
<html lang="en">

    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MOU9EF - Espace Membre</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
          <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="img/icon2.ico">

    </head>

<body>

    <div class="container py-5">


        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text" >
                            <h1><strong>Pour plus d'information</strong> </h1>
                            <div class="description">
                              <p>
                                Responsable Client : ELAMRICHE Abdessamad <br>
                                Numéro : 0537259548 <br>
                                E-mail : abdssamadelamriche@gmail.com  <br>
                            	</p>
                            </div>
                            
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Bonjour Cher(e) Membre</h3>
                            		<h5>Connectez Vous Maintenant</h5>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">



                              <form method="post" action="loginmem.php">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"><br>@Email</label>
                                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Mot de passe</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez mot de passe" required>
                                  </div>
                                  <input type="submit" name="submit" value="Connectez!" class="btn btn-block btn-primary">

                                  <div class="alert alert-error">
                                  <p align="center">Nouveau Membre? <a href="signupmem.php">Inscrivez vous!</a></p>
                                 </div>

                              </form>




                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>

</html>
