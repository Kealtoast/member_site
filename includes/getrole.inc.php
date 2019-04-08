<?php
require_once 'dbh.inc.php';
$userid = $_SESSION['u_id'];
$sql = "SELECT * FROM perm WHERE user_id='".$userid."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION['perm_profile'] = $row['perm_profile'];
$_SESSION['perm_app'] = $row['perm_app'];
$_SESSION['perm_blog'] = $row['perm_blog'];
print_r($row);