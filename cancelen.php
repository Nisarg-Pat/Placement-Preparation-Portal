
<!DOCTYPE html>
<html>
<head>
	<title></title>
      <style type="text/css">

  .lin{
    border-color: transparent;
    border:1px solid black;
    padding: 10px;
    font-size: 20px;
    border-radius: 5px;
    transition-duration: 0.4s;
    color: #34495E; 
  }
    .lin:hover{
    background-color: #34495E;
    color: white;
  }
  </style>
</head>
<body>
	<?php include("navbar.php") ?>


<?php
if(isset($_REQUEST["eid"]))
{
  $course_id=$_REQUEST["eid"];
  $sel="select * from courses where course_id=$course_id";
  $res=$conn->query($sel);
  $course=$res->fetch_object();
}
?>



<center>
<h1>
  <?php echo $course->course_name;
  ?>
</h1>
</center>

  <?php echo $course->course_content;
  ?>
  <br>
  <br>
<h2 align="center">
  Do you really want to unenroll the course?
</h2>
</center>
<table align="center" width="30%">
<td>
<center><a href="cancelen2.php?eid=<?php echo $course->course_id;?>"><button class="lin" style=" border:1px solid black;padding: 10px;width: 100px;font-size: 20px;border-radius: 5px">Yes</button></a></center>
</td>
<td>
  <center>
  <a href="enrolled.php?eid=<?php echo $course->course_id;?>"><button class="lin" style=" border:1px solid black;padding: 10px;width: 100px; font-size: 20px;border-radius: 5px">No</button></a></center>
</td>
</table>
</body>
</html>