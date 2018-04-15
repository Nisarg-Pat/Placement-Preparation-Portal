<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbar.php") ?>



<?php
error_reporting(0);
  $sq2="select * from courses";
    $res2=$conn->query($sq2);
?>


<div style="margin-left: 1%">
  <h2>Top Courses:</h2>
	<table border=1px>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Instructor</th>
			<th>Content</th>
			<th>Status</th>
		</tr>
		<?php
  while ($fe2=$res2->fetch_object())
  {
  	?>
  <tr style="text-align: center;">
    <td style="padding: 10px"><?php echo $fe2->course_id;?></td>
    <td style="padding: 10px"><?php echo $fe2->course_name;?></td>
  	<td style="padding: 10px"><?php echo $fe2->course_instructor;?></td>
    <td style="padding: 10px"><?php echo $fe2->course_content;?></td>
      <td>
        <a href="course.php?eid=<?php echo $fe2->course_id;?>">
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
