<?php
session_start();
unset($_SESSION['adm_no']);
session_destroy();

header("Location: login.php");
exit;
?>