<?php require_once('connection.php');?>

<?php   

session_start();          

		$first = $_POST['name'];
		$pass =  $_POST['pass'];




		$query = 	"SELECT * FROM `php` WHERE username = '$first' && password = '$pass'";
		
		
	$result =	mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);

	
	if ($row['password'] == $pass && $row['username']==$first){


echo "login successful";


	}



	else{

		echo "login failed";
		



		}	




?>
