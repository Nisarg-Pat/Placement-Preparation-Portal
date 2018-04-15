<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbarcomp.php") ?>



<?php
  $sq2="select * from company_register join student on student.Student_ID=company_register.Student_ID  where company_id=$fe->company_id";
    $res2=$conn->query($sq2);
?>


<div style="margin-left: 1%">
  <h2>Registered Students:</h2>
	<table border=1px>
		<tr>
			<th>ID</th>
      <th>Name</th>
      <th>Pointer</th>
		</tr>
		<?php
  while ($fe2=$res2->fetch_object())
  {
  	?>
  <tr style="text-align: center;">
    <td style="padding: 10px"><?php echo $fe2->Student_ID;?></td>
    <td style="padding: 10px"><?php echo $fe2->Student_Name;?></td>
    <td style="padding: 10px"><?php echo $fe2->CPI;?></td>
  </tr>
  <?php
  }
  ?>
  	</table>
</div>

</body>
</html>
