<?php
SESSION_START();
include "isLogin.php";
include "dbconn.php";
include "sql.php";
$sql = new sql();
$user = $sql->listUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test web browser notifikasi</title>
</head>
<body>
	<h2>Dashboard </h2>
	<?php 
		if($_SESSION['username'] == 'admin')
		{
			?>
				<a href="broadcast.php">Notification Menu</a> | 
			<?php
		}

	 ?>
	 <a href="logout.php">Logout</a>
	<hr>
	<h4>Welcome back <strong><?php echo $_SESSION['username'] ?></strong></h4>
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Notifikasi Script -->
	<script src="mynotif.js"></script>
</body>
</html>