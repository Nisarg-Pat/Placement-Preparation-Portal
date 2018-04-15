<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbar.php") ?>


<?php
  $sq2="select * from company";
    $res2=$conn->query($sq2);
?>


<div style="margin-left: 1%">
  <h2>Trending Jobs</h2>
	<table border=1px>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Job Profile</th>
			<th>Headquarters</th>
			<th>Pointer Criteria</th>
      <th>CTC</th>
      <th></th>
		</tr>
		<?php
  while ($fe2=$res2->fetch_object())
  {
  	?>
  <tr style="text-align: center;">
    <td style="padding: 10px"><?php echo $fe2->company_id;?></td>
    <td style="padding: 10px"><?php echo $fe2->company_name;?></td>
    <td style="padding: 10px"><?php echo $fe2->job_profile;?></td>
  	<td style="padding: 10px"><?php echo $fe2->company_hq;?></td>
    <td style="padding: 10px"><?php echo $fe2->pointer_criteria;?></td>
    <td style="padding: 10px"><?php echo $fe2->CTC;?></td>
      <td>
        <a href="view_company.php?eid=<?php echo $fe2->company_id;?>">
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
