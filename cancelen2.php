<?php include("navbar.php") ?>
<?php
if(isset($_REQUEST["eid"]))
{
  $course_id=$_REQUEST["eid"];
  $sel="delete from enroll_student where course_id=$course_id AND Student_ID=$fe->Student_ID";
  $res=$conn->query($sel);
  if($res)
  {
  	?>
    <script type="text/javascript">
      alert("Successfully Unenrolled")
      window.location="course.php?eid=<?php echo $course_id;?>";
    </script>
    <?php
  }
  else
  {
  	  	?>
    <script type="text/javascript">
      alert("Not Successfully Unenrolled")
      
    </script>
    <?php
  }
}
?>