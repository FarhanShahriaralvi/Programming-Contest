<?php 
session_start(); 
require_once('db_connect.php');

if (isset($_GET['username']) && isset($_GET['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_GET['username']);
	$password = validate($_GET['password']);

	if (empty($username)) {
		header("Location: login_index.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: login_index.php?error=Password is required");
	    exit();
	}else{
		
		$connect = mysqli_connect( HOST, USER, PASS, DB )

			or die("Can not connect");
        
		$sql = "SELECT * FROM users WHERE username='$username' AND  password='$password'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	
            	$first_name = $row['first_name'];
            	$last_name = $row['last_name'];
				$password = $row['password'];
				$user_phone = $row['user_phone'];
				$username = $row['username'];
				$user_id = $row['user_id'];
            	header("Location: index.php?username=$username &user_id=$user_id");
		        exit();
            }else{
				header("Location: login_index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login_index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login_index.php");
	exit();
}
?>