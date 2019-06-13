<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$reservation = $_POST['reservation'];
$ville = $_POST['ville'];
$service = $_POST['service'];

if (!empty($firstname) || !empty($lastname) || !empty($phone) || !empty($reservation) ||
!empty($ville) || !empty($service)) {   
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mou9ef";
     //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
    else {
        /*$req = "INSERT INTO contact (firstname, lastname, phone, reservation, ville, service, id) VALUES ('$firstname', '$lastname', '$phone', '$reservation', '$ville', '$service', '')";*/
            $stmt = $conn->prepare ("INSERT INTO `contact`(`firstname`, `lastname`) VALUES (?,?)");
            $stmt->bind_param("ss", $firstname, $lastname);
            $stmt->execute(); 
            echo "Inserted" ;
     }
}
    
 else {
 echo "All field are required";
    }
?>