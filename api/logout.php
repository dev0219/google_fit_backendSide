<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION['lang']);
header("Location:../../op_auth_signin.php");
?>