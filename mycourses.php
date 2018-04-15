<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbar.php") ?>


<?php
error_reporting(0);
  $sq3="select * from enroll_student join courses on enroll_student.course_id=courses.course_id where Student_ID=$fe->Student_ID";
    $res3=$conn->query($sq3);
?>

<div style="margin-left: 1%">
  <h2>Enrolled Courses</h2>
  <table border=1px>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Instructor</th>
      <th>Content</th>
      <th>Status</th>
    </tr>
    <?php
  while ($fe3=$res3->fetch_object())
  {
    ?>
  <tr style="text-align: center;">
    <td style="padding: 10px"><?php echo $fe3->course_id;?></td>
    <td style="padding: 10px"><?php echo $fe3->course_name;?></td>
    <td style="padding: 10px"><?php echo $fe3->course_instructor;?></td>
    <td style="padding: 10px"><?php echo $fe3->course_content;?></td>
      <td>
        <a href="enrolled.php?eid=<?php echo $fe3->course_id;?>">
      <input type="submit" name="nroll" value="View">
    </a>
    </td>
  </tr>
  <?php
  }
  ?>
    </table>
</div>

</body>
</html>
