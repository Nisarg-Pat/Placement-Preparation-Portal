<?php
include("conn.php");
session_start();
if(isset($_REQUEST["submit"]))
{
	$name=$_REQUEST["name"];
	$eml=$_REQUEST["email"];
	$pwd=$_REQUEST["pass"];
	$hq=$_REQUEST["hq"];
	$pc=$_REQUEST["pc"];
	$jp=$_REQUEST["jp"];
	$CTC=$_REQUEST["CTC"];

	$sq="insert into company(company_name, email,company_password, company_hq, pointer_criteria, job_profile, CTC) values('$name','$eml','$pwd','$hq',$pc,'$jp','$CTC')";
	$res=$conn->query($sq);
	$sq1="select * from company where email='$eml'";
	$res2=$conn->query($sq1);
	$r1_num_rows=$res2->num_rows;

	if($res)
	{
		?>
		<script type="text/javascript">
			alert("Sign Up Successfull");
			<?php 
				$_SESSION["eml"]=$eml;
			?>
			window.location="pagecomp.php";
		</script>
		<?php
	}
	elseif($res2)
	{
		?>
		<script type="text/javascript">
			alert("This Email Id already has an account.");
			window.location="signup.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Sign Up not Successfull!!! Try Again.");
			window.location="signup.php";
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
<center><h1>Company Sign Up</h1>
<form action="" method="POST">
<table style="border: 1px solid black">
	<tr>
		<td>Company Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Company Email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="Password" name="pass"></td>
	</tr>
	<tr>
		<td>Headquarters:</td>
		<td><input type="text" name="hq"></td>
	</tr>
	<tr>
		<td>Pointer Criteria(>)</td>
		<td><input type="text" name="pc"></td>
	</tr>
	<tr>
	<tr>
		<td>Job Profile:</td>
		<td><input type="text" name="jp"></td>
	</tr>
	<tr>
		<td>CTC:</td>
		<td><input type="text" name="CTC"></td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>