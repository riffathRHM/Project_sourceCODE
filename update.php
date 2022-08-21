<?php
    session_start();
    $username = $_SESSION['username'];
	$con = mysqli_connect('localhost','id19411331_root','NejM7Wwf5\lWZ_~B','id19411331_member');
	if(!$con){
		echo "Connection Failed <br>";
	}

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$medical = $_POST['medical'];	
	$plan = $_POST['plan'];	
	
	$result = mysqli_query($con,"UPDATE  member  set `firstname` = '$fname', `lastname` = '$lname' ,`email` = '$email',`dob`='$dob' ,`gender` = '$gender', `contactno` = '$contact', `address` = '$address' , `password` = '$pwd',`medicalCondition`= '$medical',`membershipType`= '$plan' WHERE `username` ='$username'");
	header("Location:select.php");
	
?>