<?php
 $firstName = $_POST['firstName'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $number = $_POST['number'];
 $mob_digits = $_POST['mob_digits'];
 
 $conn = new mysqli('localhost','root','','hotel');
 if($conn->connect_error){
	 die('Connection failed :'.$conn->connect_error);
 }else{
	 $stmt = $conn->prepare("insert into registration(firstName, password, email, gender, number)
	 values(?,?,?,?,?)");
	 $stmt->bind_param("ssssi",$firstName, $password, $email, $gender,  $number );
	 $stmt->execute();
	 echo "Reg succesful...";
	 $stmt->close();
	 $conn->cose();
 }

?>