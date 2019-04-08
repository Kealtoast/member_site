<?php

require_once "includes/role.inc.php";
require_once "includes/privilegeduser.inc.php";
require_once "dbh.inc.php";

session_start();

if (isset($_SESSION["u_id"])) {
    $u = PrivilegedUser::getByUsername($_SESSION["u_id"]);
}

print_r($_SESSION);