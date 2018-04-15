<?php
include("conn.php");
session_start();
if(isset($_REQUEST["login"]))
{
	$id=$_REQUEST["id"];
	$pwd=$_REQUEST["pass"];
	$lgn="select * from company where email='$id' AND company_password='$pwd'";
	$res=$conn->query($lgn);
	$chk=$res->num_rows;

	if($chk==1){
		$_SESSION["id"]=$id;
		?>
		<script type="text/javascript">
			window.location="pagecomp.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Login not success");
			window.location="login.php";
		</script>
		<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Company Login</h1>
<form action="" method="POST">
	<table style="border: 1px solid black">
		<tr>
			<td>
				Email:
			</td>
			<td>
				<input type="text" name="id">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="Password" name="pass">
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit" name="login" value="Login">
			</td>
		</tr>
	</table>
</form>
</body>
</html>