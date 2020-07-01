<?php
	include 'dbconn.inc.php';
	$username = $_POST['user_name'];
	$password = $_POST['user_pwd'];
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result)) {
			if($row['user_first'] == $username and $row['user_pwd'] == $password)
			{
				header("Location: ../actions.php?login=success");
			}
		}
	}
	header("Location: ../login.php?login=failed");
