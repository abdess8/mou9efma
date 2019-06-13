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
    $sql = "SELECT * from signupemp WHERE email = '$email' AND password = '$password'; ";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result)) {
      $_SESSION['email'] = $email;
    }else {
      $_SESSION['message']="wrong username or password.";
    }
  }
    
    $firstname = $db->real_escape_string($_POST['firstname']);
    $lastname = $db->real_escape_string($_POST['lastname']);
    $phoneuser = $db->real_escape_string($_POST['phoneuser']);
    $gender = $_POST['gender'];
    $ville = $_POST['ville'];
    $service = $_POST['service'];
    $email = $db->real_escape_string($_POST['email']);
    $password = md5($_POST['password']);
    
    if ($_POST['password'] === $_POST['confirmPassword']) {
    
    $sql = "insert into signupemp(firstname,lastname,phoneuser,gender,ville,service,email,password) values ('$firstname','$lastname','$phoneuser','$gender','$ville','$service','$email','$password')";
    if ($db->query($sql) === true) {
      $_SESSION['message']= "Registration Successful.";
      header("location: loginemp.php");
    }else {
      $_SESSION['message']= "user could not be added to database";
    }

  }else {
    $_SESSION['message']='Password and Confirm Password are not same.';
  }

}




?>


<!DOCTYPE html>
<html lang="fr">

    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                        <div class="col-sm-6 text" >
                            <h1><strong>Pour plus d'information</strong> </h1>
                            <div class="description">
                              <p>
                                Responsable Client : ELAMRICHE Abdessamad <br>
                                Numéro : 0537259548 <br>
                                E-mail : abdssamadelamriche@gmail.com  <br>
                            	</p>

                            </div>
                        </div>
                        <div class="col-sm-6 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Inscrivez vous maintenant</h3>
                            		<p>C'est rapide! Remplissez cette forme:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">

			                    <form role="form" action="signupemp.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="firstname">Prènom</label>
			                        	<input type="text" name="firstname" placeholder="Votre Prènom" class="form-first-name form-control" id="form-first-name"  required >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="lastname">Nom de famille</label>
			                        	<input type="text" name="lastname" placeholder="Votre Nom" class="form-last-name form-control" id="form-last-name" required >
			                        </div>

                              <div class="form-group">
                                <label class="sr-only" for="phoneuser">Numéro De Téléphone</label>
                                <input type="text" name="phoneuser" placeholder="Téléphone" class="form-user-id form-control" id="form-user-id"  required>
                              </div>

                              <div class="form-group">
                                <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label> -->
                                  <select class="custom-select mr-sm-2" name="gender" id="inlineFormCustomSelect">

                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    <option value="Other">Other</option>
                                  </select>

                              </div>
                                      <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
						  	<select class="form-control hint" name="ville" required=''>
                                <option  value="ville" >Votre Ville*</option>
							    <option  value="Agadir">Agadir</option>
                                <option  value="Assilah">Assilah</option>
                                <option  value="beni mellal">beni mellal</option>
                                <option  value="Benslimane">Benslimane</option>
                                <option  value="Bouznika ">Bouznika </option>
                                <option  value="Casablanca">Casablanca</option>
                                <option  value="Chefchaouen">Chefchaouen</option>
                                <option  value="Chichaoua">Chichaoua</option>
                                <option  value="El Jadida">El Jadida</option>
                                <option  value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
                                <option  value="Errachidia">Errachidia</option>
                                <option  value="Essaouira">Essaouira</option>
                                <option  value="Fes">Fes</option>
                                <option  value="Hoceima">Hoceima</option>
                                <option  value="Ifrane">Ifrane</option>
                                <option  value="Kenitra">Kenitra</option>
                                <option  value="Khemisset">Khemisset</option>
                                <option  value="Khouribga">Khouribga</option>
                                <option  value="Laayoune">Laayoune</option>
                                <option  value="Larache">Larache</option>
                                <option  value="Marrakech">Marrakech</option>
                                <option  value="Meknes">Meknes</option>
                                <option  value="Midelt">Midelt</option>
                                <option  value="Mohammedia">Mohammedia</option>
                                <option  value="Oujda">Oujda</option>
                                <option  value="Safi">Safi</option>
                                <option  value="Sale">Sale</option>
                                <option  value="Sefrou">Sefrou</option>
                                <option  value="Settat">Settat</option>
                                <option  value="Sidi Bennour">Sidi Bennour</option>
                                <option  value="Skhirat">Skhirat</option>
                                <option  value="Tanger">Tanger</option>
                                <option  value="Tarfaya">Tarfaya</option>
                                <option  value="Temara">Temara</option>
                                <option  value="Tetouan">Tetouan</option>
                                <option  value="Tiznit">Tiznit</option>
                                <option  value="Zagora">Zagora</option>
			                </select>
                          </div>
                          
                    
						<div class="col-lg-6 col-md-6 form-group">
						  	<select class="form-control hint" name="service" id="service" required="">
                                <option autocomplete="off" value="service">Vous faites Quoi?*</option>
				                <option  value="1">Plomberie</option>
                                <option  value="2">Electricité</option>
                                <option  value="3">Menuiserie</option>
                                <option  value="4">Électronique</option>
                                <option  value="5">Maçonnerie</option>
                                <option  value="6">Peinture</option>
                                <option  value="7">Parabole</option>
                                <option  value="8">Vitrerie - Aluminium</option>
                                <option  value="9">Clim et froid</option>
                                <option  value="10">Serrurerie</option>
                                <option  value="11">Plâtrier</option>
                                <option  value="12">Ferronnerie</option>
                                <option  value="13">Surveillance et alarmes</option>
                                <option  value="14">Etanchéité</option>
                                <option  value="15">Carrelage</option>
                                <option  value="16">Electroménager</option>
                                <option  value="17">Mécanique</option>
                                <option  value="18">Transport</option>
                                <option  value="19">Electricité-Auto</option>
                                <option  value="20">Tapisserie</option>
                                <option  value="21">Ascenseurs</option>
                                <option  value="22">Jardinier</option>
                                <option  value="23">Démolition</option>
                                <option  value="25">Encadrement</option>
                                <option  value="26">pneumatiques</option>
                                <option  value="27">Marbre</option>
                                <option  value="28">Dépannage</option>
                                <option  value="29">Piscine</option>			
							</select>
							
						</div>
                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="email">Email</label>
			                        	<input type="text" name="email" placeholder="@Email" class="form-email form-control" id="form-email" required >
			                        </div>

                              <div class="form-group">
                                <input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Mot de passe" required >
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  &#35; Votre mot de passe doit être de 8 à 20 characters de longueur, contient des letteres et numéro, et ne doit pas contenir des espaces, des characters specials, ou emoji.
                                </small>


                              </div>

                              <div class="form-group">
                                <input type="password" name="confirmPassword" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Confirmez Mot de passe" required >
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                </small>
                              </div>


			                <input type="submit" name="submit" value="Vérifier" class="btn btn-block btn-primary">

                            <div class="alert alert-error"></div>
			                    
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
