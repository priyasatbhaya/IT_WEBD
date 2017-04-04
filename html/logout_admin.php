<?php
session_start();
$_SESSION['id']=null;
header("Location: login_admin.php");
?>
