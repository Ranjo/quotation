<?php
include 'dbconfig.php';

$username = $_POST['username'];
$pass = $_POST['pswd'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$username' AND password = '$pass'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);
if($count == 1){
	$_SESSION['login_user'] = $username;
	//echo "successfull";
	header("location: ../invoice.php");
	//header("location: ../index.php?msg=2");
	
}
else{
   echo "Wrong Credentials"; 
//header("location: ../index.php?msg=2");
}
/*
$result2 = mysqli_query($con,"INSERT INTO users(username, password) VALUES('$username', '$pass')");
if(!$result2){
	//header("location: ../index.php?msg=2");
	echo "Wrong Credentials";
}
else{
    //$_SESSION['login_user'] = $doctorid;
	echo "successfull";
	//header("location: ../adminpanel/doctor/startpage.php");
//header("location: ../index.php?msg=2");

}*/
?>