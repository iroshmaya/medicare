<?php
session_start(); 

include_once  'dbh.inc.php';

if (isset($_POST['home'])) {
    header("Location: ../signup.php");/*link to home        */
	exit();
	
	
} else if (isset($_POST['channel'])) {
    header("Location: ../appointment.php");/*link to appointment        */
	exit();
	
} 
else if (isset($_POST['update'])) {
    
}
else if (isset($_POST['reports'])) {
    
}
else if (isset($_POST['contact'])) {
   
}
else {
    
}

?>