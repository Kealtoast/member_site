<?php 

session_start();

	if (isset($_POST['submit'])) {
		
		include 'dbh.inc.php';

		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Error handlers
		//Check if fields are empty and return to login with get of login=empty

		if (empty($uid) || empty($pwd)) {
			header("Location: ../login.php?login=empty");
			exit();
		} else {
			$sql = "SELECT * FROM users WHERE user_uid='$uid' OR  user_email='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				header("Location: ../login.php?login=error");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					//de-hashing password
					$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
					if ($hashedPwdCheck == false) {
							header("Location: ../login.php?login=error1");
							exit();
						} elseif ($hashedPwdCheck == true) {
							//login user
							$_SESSION['u_id'] = $row['user_id'];
							$_SESSION['u_first'] = $row['user_first'];
							$_SESSION['u_last'] = $row['user_last'];
							$_SESSION['u_email'] = $row['user_email'];
							$_SESSION['u_uid'] = $row['user_uid'];
							$_SESSION['u_about_me'] = $row['user_about_me'];
							$_SESSION['u_facebook'] = $row['user_facebook'];
							$_SESSION['u_age'] = $row['user_age'];
							$_SESSION['u_instagram'] = $row['user_instagram'];
							$_SESSION['u_twitter'] = $row['user_twitter'];
							$_SESSION['u_profile_image'] = $row['user_profile_image'];
							//Add Permissions to session
							include_once 'getrole.inc.php';

							header("Location: ../index.php?login=successful");
							exit();
						}
				}
			}
		}

	} else {
		header("Location: ../login.php?login-error");
		exit();
	}