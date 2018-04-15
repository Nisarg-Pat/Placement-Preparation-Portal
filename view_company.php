
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
  $sel2="select * from company_register where Student_ID=$fe->Student_ID AND company_id=$company_id";
  $res2=$conn->query($sel2);
  $chk=$res2->num_rows;
  if($chk==1){
    ?>
    <script type="text/javascript">
      window.location="registered_company.php?eid=<?php echo $company_id;?>";
    </script>
    <?php
  }
  $company=$res->fetch_object();
}
?>


<center>
<h1><?php echo $company->company_name;
  ?></h1>
</center>


<h1 align="center"><img src="<?php echo $company->company_name; ?>.png" style="border:2px solid black; border-radius:5px;" height="100px" width="100px"> </h1>
<div style="text-align: center; margin-left: 1%">
  <table align="center">
    <td align="center" width="70%">
    <h3><b>Company Headquarters:</b> <?php echo $company->company_hq;?></h3>
    <h3><b>Job Profile:</b> <?php echo $company->job_profile;?></h3>
    <h3><b>Pointer Criteria:</b> <?php echo $company->pointer_criteria;?> and above</h3>
    <h3><b>CTC:</b> Rs: <?php echo $company->CTC;?> per annum</h3>
<td align="center" width="20%">
<form action="" method="post">
<input type="submit" name="register" value="Register" class="lin" style=" border:1px solid black;padding: 10px; font-size: 20px;border-radius: 5px">
</form>
</td>
</table>
</div>
</center>
  <br>
  <br>
<center>

</center>  
</body>
</html>

<?php
if(isset($_REQUEST["register"]))
{


  if($company->pointer_criteria>=$fe->CPI)
  {
      ?>
      <script type="text/javascript">
        alert("Not enough Pointer");
      </script>
      <?php
  }
  else
  {
      $sq="insert into company_register values($fe->Student_ID,$company->company_id)";

  $res=$conn->query($sq);
    if($res)
    {
      ?>
      <script type="text/javascript">
        alert("Registration Successfull");
        window.location="registered_company.php?eid=<?php echo $company_id; ?>";
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Registration UnSuccessfull");
      </script>
      <?php
    }
  }
}
?>