<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbar.php") ?>


<?php
error_reporting(0);
  $sq3="select * from company_register join company on company_register.company_id=company.company_id where Student_ID=$fe->Student_Name ";
    $res3=$conn->query($sq3);
?>

<div style="margin-left: 1%">
  <h2>Registered Companies</h2>
  <table border=1px>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>HQ</th>
      <th>Pointer Criteria</th>
      <th>Job Profile</th>
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
