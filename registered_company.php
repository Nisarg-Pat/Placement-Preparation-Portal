
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
  $company_id=$_REQUEST["eid"];
  $sel="select * from company where company_id=$company_id";
  $res=$conn->query($sel);
  $company=$res->fetch_object();
}
?>



<center>
<table align="center" width="50%">
  <td align="center" style="width: 44%"><h1><?php echo $company->company_name;
  ?></h1>
</td>
<td align="center" style="width: 44%"> <button class="lin" style=" border:1px solid black;padding: 5px;width: 150px;font-size: 20px;border-radius: 5px">Registered</button></td>
</table>
<h1 align="center"><img src="<?php echo $company->company_name; ?>.png" style="border:2px solid black; border-radius:5px;" height="100px" width="100px"> </h1>
<div style="margin-left: 1%">
    <h3><b>Company Headquarters:</b> <?php echo $company->company_hq;?></h3>
    <h3><b>Job Profile:</b> <?php echo $company->job_profile;?></h3>
    <h3><b>Pointer Criteria:</b> <?php echo $company->pointer_criteria;?> and above</h3>
    <h3><b>CTC:</b> Rs: <?php echo $company->CTC;?> per annum</h3>
</div>
</center>
  <br>
<center><a href="cancelreg.php?eid=<?php echo $company->company_id;?>"><button class="lin" style=" border:1px solid black;padding: 10px;font-size: 20px;border-radius: 5px">Cancel Registration</button></a></center>
<br>
<br>
</body>
</html>