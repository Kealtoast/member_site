<?php

$sql = "SELECT * FROM role_perm";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
print_r($row);