<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=mou9ef','root','');
}catch(Exception $e){
    die('erreur : '.$e->getMessage());
}

function secureInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$params[] = secureInput( $_POST["firstname"]);
$params[] = secureInput($_POST["lastname"]);
$params[] = secureInput($_POST["phone"]);
$params[] = $_POST["reservation"];
$params[] = $_POST["adresse"];
$params[] = $_POST["ville"];
$params[] = $_POST["service"];   

$sql='INSERT INTO contact (firstname, lastname, phone, reservation, adresse, ville, service) VALUES (?,?,?,?,?,?,?)';   
try{
    $query=$conn->prepare($sql);
    $query->execute($params);
    
}catch(Exception $e){
    
    echo $e->getMessage();
}


header("refresh:1; url=index2.php");

?>

<html>
    <head>
    <title>MOU9EF - Merci</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">


    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
	
	<link href="images/icon2.ico" rel="shortcut icon">
	<link href="images/icon57.png" rel="small icon">
	<link href="images/icon72.png" sizes="72x72" rel="medium icon">
	<link href="images/icon114.png" sizes="114x114" rel="big icon">
    
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="img/icon2.ico">
	
</head>
</html>
