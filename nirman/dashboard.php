<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php
include('inc_session.php');
?>
<div style="background-color: lightblue; text-align:center; font-family: Britannic Bold">
<h1>Dashboard</h1>
<a href="logout.php">Logout</a>
<a href="allusers.php">All Users</a>
</div>
Hello, <?php echo $_SESSION['username'];?>
</body>
</html>