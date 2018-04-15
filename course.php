
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
  $sel2="select * from enroll_student where Student_ID=$fe->Student_ID AND course_id=$course_id";
  $res2=$conn->query($sel2);
  $chk=$res2->num_rows;
  if($chk==1){
    ?>
    <script type="text/javascript">
      window.location="enrolled.php?eid=<?php echo $course_id;?>";
    </script>
    <?php
  }
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
<center>
<form action="" method="post">
<input type="submit" name="enroll" value="Enroll" class="lin" style=" border:1px solid black;padding: 5px;font-size: 20px;border-radius: 5px">
</form>
</center>  
</body>
</html>

<?php
if(isset($_REQUEST["enroll"]))
{
  $sq="insert into enroll_student values($fe->Student_ID,$course->course_id)";

  $res=$conn->query($sq);
  if($res)
  {
    ?>
    <script type="text/javascript">
      alert("Enroll Successfull");
      window.location="enrolled.php?eid=<?php echo $course->course_id;?>";
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Enroll UnSuccessfull");
    </script>
    <?php
  }
}
?>