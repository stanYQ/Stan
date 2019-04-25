<?php
session_start();
$_SESSION['user'] = null;
header('Location:http://localhost:63342/stan/admin/login.html');
?>