<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Insert Contacts in database</title>
</head>
<body>

<form method="POST">
	<input type="text" name="name" placeholder="Name">
	<br>
	<input type="text" name="phone" placeholder="Phone-No">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="batch" placeholder="Passout batch">
	<br>
	<input type="text" name="hall" placeholder="Hall">
	<br>
	<input type="text" name="linkedin" placeholder="Linkedin-profile">
	<br>
	<input type="text" name="Donated" placeholder="Enter only yes or no">
	<br>
	<button type="submit" name="submit">Submit data</button>
</form>
<?php
	$nam = $_POST['name'];
	$phone = $_POST['phone']; 
	$email = $_POST['email'];
	$passout_year = $_POST['batch'];
	$hall = $_POST['hall'];
	$linkedin_profile = $_POST['linkedin'];
	if(strtolower($_POST[Donated]) == 'yes'){
		$donated = 1;
	}
	else $donated = 0;
	$sql = "INSERT INTO alumni_information (name, phone, email, passout_year, hall, linkedin_profile, alloted, donated) 
	VALUES('$name', '$phone', '$email', '$passout_year', '$hall', '$linkedin_profile', '0','$donated');"
	mysqli_query($conn, $sql);
?>

</body>
</html>


  `name` varchar(256) NOT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `passout_year` varchar(256) DEFAULT NULL,
  `hall` varchar(256) DEFAULT NULL,
  `linkedin_profile` varchar(256) DEFAULT NULL,
  `alloted` bit(1) NOT NULL,
  `donated
