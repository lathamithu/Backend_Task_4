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
$file = $_FILES["file"];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];


if(move_uploaded_file ($file_path,$file_name))
{
	$sql = "INSERT INTO `form`(`First name`, `Last name`, `DOB`, `Gender`, `Qualification`, `Address`, `Filename`, `Filetype`, `Filesize`,`Filepath`) VALUES (:fname,:lname,:date_,:gender,:education,:address,:filename,:filetype,:filesize,:filepath)";
$stmt = $pdo->prepare($sql);

$pdoExec = $stmt->execute(array(":fname"=>$Firstname,":lname"=>$Lastname,":date_"=>$Date_,":gender"=>$Gender,":education"=>$Education,":address"=>$Address,":filename"=>$file_name,":filetype"=>$file_type,":filesize"=>$file_size,":filepath"=>$file_path));

if($pdoExec)
{
	require 'details.php';
}
else
{
	echo "Not inserted";
}
}



?>
