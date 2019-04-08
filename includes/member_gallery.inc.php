<?php

require_once 'dbh.inc.php';
$sql = "SELECT * FROM users INNER JOIN perm ON users.user_id = perm.user_id";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck < 1) {
	
} else {
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['perm_profile'] == 1){
			echo '<div class="col-xs-12 col-sm-6 col-md-3 gallery-holder">
				<a href="member.php?member='.$row['user_uid'].'">
					<div class="image-holder">
						<div class="text-red">'.$row['user_uid'].'</div>
						<img src="'.$row['user_profile_image'].'" alt="Bellatrixs">
					</div>
					<div class="info-holder bg-primary">
						<span>'.$row['user_age'].'</span>
						<span>'.$row['user_about_me'].'</span>
					</div>
				</a>
			</div>';
		}
	}
}


