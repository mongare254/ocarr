<?php
session_start();
unset($_SESSION['staffno']);
session_destroy();

header("Location: login.php");
exit;
?>