<?php

$server = 'sql308.epizy.com';
$user = 'epiz_28402612';
$password = 'IPpydeIgM0gTXz';
$db = 'epiz_28402612_ur';
	
	$con = mysqli_connect($server, $user, $password, $db);
	
	if($con){
		echo "Connection Established";
	}else{
		echo "Connection not Established";
	}

?>