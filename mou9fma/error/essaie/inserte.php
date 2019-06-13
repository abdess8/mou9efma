<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$phone = filter_input(INPUT_POST, 'phone');
$reservation = filter_input(INPUT_POST, 'reservation');
$ville = filter_input(INPUT_POST, 'ville');
$service = filter_input(INPUT_POST, 'service');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mou9ef";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql="INSERT INTO contact (firstname, lastname, phone, reservation, ville, service) 
VALUES ('$firstname', '$lastname', '$phone', '$reservation', '$ville', '$service')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}

?>