<?php
session_start(); 

include_once  'dbh.inc.php';
	
	$uid=mysqli_real_escape_string($conn,$_POST['user_name']);
	$first=mysqli_real_escape_string($conn,$_POST['first_name']);
	$last=mysqli_real_escape_string($conn,$_POST['last_name']);
	$email=mysqli_real_escape_string($conn,$_POST['e_mail']);
	$birthday=mysqli_real_escape_string($conn,$_POST['birth']);
	$telephone=mysqli_real_escape_string($conn,$_POST['tele_no']);
	$chaneldate=mysqli_real_escape_string($conn,$_POST['chanel_date']);
	$reson=mysqli_real_escape_string($conn,$_POST['reason']);
	$docter=mysqli_real_escape_string($conn,$_POST['select_docter']);
	$selected_docter = $_POST['select_docter'];
	
	if(empty($uid) ||empty($first) || empty($last) || empty($email) || empty($birthday) || empty($telephone) || empty($chaneldate) || empty($reson) || empty($selected_docter)){
		header("Location: ../appointment.php?appointment=empty");
		exit();
	}
	else{
		// if valid check inputs are valid or not
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)|| !preg_match("/^[1-9][0-9]*$/",$telephone)){
			header("Location: ../appointment.php?appointment=invalid");
			exit();
		}
		else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../appointment.php?appointment=invalid");
				exit();
			}
			else{
				
				$sql = "UPDATE users SET telephone_number='$telephone',appointment_date='$chaneldate',docter_name='$selected_docter',reson='$reson'  WHERE user_uid='$uid'";
				mysqli_query($conn,$sql);  
					header("Location: ../appointment.php?appointment=success");//success/////////
					exit();
				
			}
			
		}
	}

?>