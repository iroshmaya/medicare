<?php
session_start();

if(isset($_POST['submit'])){
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	
	//error handle,input empty
	if(empty($uid) || empty($pwd)){
		header("Location: ../index.php?login=empty");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE user_uid='$uid'" ;
		$result =mysqli_query($conn,$sql);
		$resultcheck =mysqli_num_rows($result);
		 
		if($resultcheck<1){
			header("Location: ../index.php?login=error2");
			exit();
		}
		else{  
			if($row =mysqli_fetch_assoc($result)){
				if( $pwd== $row['user_pwd']){
					//login user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email '];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../menutry.php");/*link to menu        */
					exit();
				}
				else{
					
					header("Location: ../index.php?login=check_password");
					exit();
				}
			}
		}
	}
	
}
else{
		header("Location: ../index.php?login=error1");
		exit();
	}

?> 