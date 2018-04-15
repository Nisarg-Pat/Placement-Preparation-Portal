<?php
include("conn.php");
session_start();
if(isset($_REQUEST["submit"]))
{
	$id = $_REQUEST["id"];
	$name=$_REQUEST["name"];
	$eml=$_REQUEST["email"];
	$pwd=$_REQUEST["pass"];
	$cpi=$_REQUEST["cpi"];
	$perc_10=$_REQUEST["perc_10"];
	$perc_12=$_REQUEST["perc_12"];
	$contact_no=$_REQUEST["contact_no"];


	$sq="insert into student(Student_ID, Student_Name, Student_Email, Student_Password,CPI, 10_perc, 12_perc, Student_Contact) values($id,'$name','$eml','$pwd',$cpi, $perc_10, $perc_12, $contact_no)";
	$res=$conn->query($sq);
	$sq1="select * from student where Student_Email='$eml'";
	$res2=$conn->query($sq1);
	$r1_num_rows=$res2->num_rows;

	if($res)
	{
		?>
		<script type="text/javascript">
			alert("Sign Up Successfull");
			<?php 
				$_SESSION["id"]=$id;
			?>
			window.location="page.php";
		</script>
		<?php
	}
	elseif($r1_num_rows==1)
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
<center><h1>Student Sign Up</h1>
<form action="" method="POST">
<table style="border: 1px solid black">
	<tr>
		<td>Student ID:</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="Password" name="pass"></td>
	</tr>
	<tr>
	<tr>
		<td>CPI:</td>
		<td><input type="text" name="cpi"></td>
	</tr>
	<tr>
		<td>10<sup>th</sup> Percentage:</td>
		<td><input type="text" name="perc_10"></td>
	</tr>
	<tr>
		<td>12<sup>th</sup> Percentage:</td>
		<td><input type="text" name="perc_12"></td>
	</tr>
	<tr>
		<td>Contact No.:</td>
		<td><input type="text" name="contact_no"></td>
	</tr>
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