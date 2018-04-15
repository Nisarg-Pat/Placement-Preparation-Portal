<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("navbarcomp.php") ?>

<center>

<h1 align="center"><img src="<?php echo $fe->company_name; ?>.png" style="border:2px solid black; border-radius:5px;" height="100px" width="100px"> </h1>
<div style="margin-left: 1%">
    <h3><b>Company Headquarters:</b> <?php echo $fe->company_hq;?></h3>
    <h3><b>Job Profile:</b> <?php echo $fe->job_profile;?></h3>
    <h3><b>Pointer Criteria:</b> <?php echo $fe->pointer_criteria;?> and above</h3>
    <h3><b>CTC:</b> Rs: <?php echo $fe->CTC;?> per annum</h3>
</div>
</center>
</body>
</html>
