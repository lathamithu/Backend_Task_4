<?php
	
try{
$dsn = "mysql:host=localhost;dbname=employee";
$pdo = new PDO($dsn,"root","");
}
catch(PDOException $e)
{
	echo"Failed" . $e->getMessage();
}
$Firstname = $_POST["fname"];
$Lastname = $_POST["lname"];
$Date_ = $_POST["date_"];
$Gender = $_POST["gender"];
$Education = $_POST["education"];
$Address = $_POST["address"];

$sql = "INSERT INTO `form`(`First name`, `Last name`, `DOB`, `Gender`, `Qualification`, `Address`) VALUES (:fname,:lname,:date_,:gender,:education,:address)";
$stmt = $pdo->prepare($sql);

$pdoExec = $stmt->execute(array(":fname"=>$Firstname,":lname"=>$Lastname,":date_"=>$Date_,":gender"=>$Gender,":education"=>$Education,":address"=>$Address));

if($pdoExec)
{
	require 'details.php';
}
else
{
	echo "Not inserted";
}

?>