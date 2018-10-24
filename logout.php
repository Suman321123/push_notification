<?php 
SESSION_START();

unset($_SESSION['username']);
header('Location: index.php');
?>