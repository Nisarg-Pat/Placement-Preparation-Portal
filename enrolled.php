
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
  <button class="lin" style=" border:1px solid black;padding: 5px;width: 150px;font-size: 20px;border-radius: 5px">Enrolled</button>
</h1>
</center>

<div style="margin-left: 20px">
  <?php echo $course->course_data;
  ?>
  </div>
  <br>
  <br>
<center><a href="cancelen.php?eid=<?php echo $course->course_id;?>"><button class="lin" style=" border:1px solid black;padding: 10px;font-size: 20px;border-radius: 5px">UnEnroll Me</button></a></center> 
<br>
<br>
</body>
</html>