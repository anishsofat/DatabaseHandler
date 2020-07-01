<?php
	include 'dbconn.inc.php';
	$username = $_POST['user_name'];
	$password = $_POST['user_pwd'];
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$count = 1;
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result)) {
			if($row['user_uid'] == $username and $row['user_pwd'] == $password)
			{
				header("Location: ../actions.php?login=success");
				$count = 0;
			}
		}
	}
	if($count){
		header("Location: ../login.php?login=failed");
	}