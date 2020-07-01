<?php
	include 'dbconn.inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	if($first != "" and $last != "" and $email != "" and $uid != "" and $pwd != "" ){
		$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
		VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
		mysqli_query($conn, $sql);
		header("Location: ../index.php?signnup=success");
	}else header("Location: ../signup.php?signnup=try+again");
	
	
	
