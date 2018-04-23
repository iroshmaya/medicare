<?php

	include_once  'dbdoctor.inc.php';
	$sql = "SELECT dates FROM  doctor WHERE doctor_name='jone'";
	$result = mysqli_query($conn, $sql);
	$resultcheck=mysqli_num_rows($result);
	$datas=array();
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			$datas[]=$row;
		}
	}
	//print_r($datas);
	for($x = 0; $x < $resultcheck; $x++){
	foreach($datas[$x] as $data){
		echo $data;
	}
	
	}
?>