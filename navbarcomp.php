<?php
include("conn.php");
session_start();
if(!$_SESSION['id'])
{
  header("location:index.php");
}
  $id=$_SESSION['id'];
  $sq1="select * from company where email='$id'";
  $res=$conn->query($sq1);
    $fe=$res->fetch_object();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <h1 align="center"><img src="cpp.png" style="border:2px solid black; border-radius:5px;" height="100px" width="300px"> </h1>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="pagecomp.php">Placement Preparation</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="pagecomp.php">Home</a></li>

      <li><a href="listregistered.php">Registered Students</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<center><h1>Hello <?php echo $fe->company_name;?></h1></center>
</body>
</html>