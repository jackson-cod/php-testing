<?php

// if($_SERVER["HTTP_TOKEN"] == "dont test me boy"){
// 	echo "ajax data {$_POST['name']}";
// }else{
// 	echo "invalid request";
// }


$con = new PDO('mysql:host=localhost;dbname=laravel','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);




try{
	$stmt = $con->prepare('SELECT first_name, last_name FROM employees');
	$stmt->execute();
	$stmt->bindColumn('first_name', $first_name);
	$stmt->bindColumn('last_name', $last_name);
	
	while($stmt->fetch()){
		echo "full name: $first_name $last_name.";
	}

	$stmt->closeCursor();

}catch(PDOException $e){
	
	echo $e->getMessage();

}



















