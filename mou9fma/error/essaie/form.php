<? php

 include_once 'include.php';
 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$reservation = $_POST['reservation'];
$ville = $_POST['ville'];
$service = $_POST['service'];   

 $sql = "INSERT INTO contact (firstname, lastname, phone, reservation, ville, service) 
VALUES ('$firstname', '$lastname', '$phone', '$reservation', '$ville', '$service');"; 

mysqli_query($conn, $sql);

header("location: index.php?formulaire=success");
