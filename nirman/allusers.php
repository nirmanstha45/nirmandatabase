<?php
include('inc_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
</head>
<body>
<div class="col">
<table align="center" cellpadding="10px" border="2px">
<thead>
	<tr>
		<td>UID</td>
		<td>Username</td>
		<td>Email</td>
		<td>Role</td>
		<td>Status</td>
		<td>Functions</td>
    </tr>
</thead>
<tfoot>
		<td>UID</td>
		<td>Username</td>
		<td>Email</td>
		<td>Role</td>
		<td>Status</td>
		<td>Functions</td>
</tfoot>
<tbody>
	<?php
	//selecting all users
	$stm="SELECT * FROM users";
	//making connection
	include('connection.php');
	$qry=mysqli_query($con,$stm);
	while($row=mysqli_fetch_array($qry))
	{
		echo "<tr>";
		echo "<td>". $row['id']."</td>";
		echo "<td>". $row['username']."</td>";
		echo "<td>". $row['email']."</td>";
		echo "<td>". $row['role']."</td>";
		echo "<td>". $row['status']."</td>";
        echo "<td> EDIT | DELETE </td>"; 
        echo "</tr>";
	}
	?>
</tbody>
</table>
</div>
</body>
</html>

