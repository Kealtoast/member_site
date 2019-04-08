<?php 
	session_start();
	function arrFilterNull($arr)
	{
		if (!empty($arr)) {
			return true;	
		}
		return false;
	}
	if (!isset($_SESSION['u_id'])) {
		header('Location: ../login.php');
	} else {
		require_once 'dbh.inc.php';
		$age = mysqli_real_escape_string($conn, $_POST['age']);
		$about_me = mysqli_real_escape_string($conn, $_POST['about_me']);
		$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
		$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
		$twitter = mysqli_real_escape_string($conn, $_POST['twitter']);

		if (isset($_POST['save'])) {
			if (empty($age) && empty($about_me) && empty($facebook) && empty($instagram) && empty($twitter)) {

			} else {
				$userInputUnfilter = array('age' => $age, 'about_me' => $about_me, 'facebook' => $facebook, 'instagram' => $instagram, 'twitter' => $twitter);
				$userInput = array_filter($userInputUnfilter, "arrFilterNull");
				$sql = "UPDATE users SET";
				$i = 0;
				foreach ($userInput as $k => $v) {
					$i ++;
					if (!empty($v) && $v != $_SESSION['u_'.$k]) {
						$sql .= " user_{$k}='{$v}'";
							
						if ($i < count($userInput) && !empty($v)) {
							$sql .= ",";
						} else {
							$sql .= " ";
						}
					}
				}
				$sql .= "WHERE user_id=".$_SESSION['u_id'];
				//print_r($sql);
				mysqli_query($conn, $sql);
				header("Location: ../profile.php?update=successful");
				}
			}			
		} 