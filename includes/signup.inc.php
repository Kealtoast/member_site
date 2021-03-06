<?php 
if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	date_default_timezone_set("America/North_Dakota/Center");
	$date = date("Y-m-d H:i:s");
	

	//Error handlers
	//Check if fields are empty
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//check if input char are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=uidtaken");
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_signup_date) VALUES ('$first','$last','$email','$uid','$hashedPwd','$date');";
					mysqli_query($conn, $sql);
					$sql = "SELECT * FROM users WHERE user_uid=".$uid;
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					$id = $row['user_id'];
					$sql = "INSERT INTO perm (user_id, perm_profile_section, perm_application_section, prem_edit_blog) VALUES ('$id','0','0','0');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=successful".$date);
					exit();

				}
			}
		}
	}
} else {
	header("Location: ../signup.php");
	exit();
}