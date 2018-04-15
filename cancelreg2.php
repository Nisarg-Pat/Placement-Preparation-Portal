<?php include("navbar.php") ?>
<?php
if(isset($_REQUEST["eid"]))
{
  $company_id=$_REQUEST["eid"];
  $sel="delete from company_register where company_id=$company_id AND Student_ID=$fe->Student_ID";
  $res=$conn->query($sel);
  if($res)
  {
  	?>
    <script type="text/javascript">
      alert("Successfully Unregistered")
      window.location="view_company.php?eid=<?php echo $company_id;?>";
    </script>
    <?php
  }
  else
  {
  	  	?>
    <script type="text/javascript">
      alert("Not Successfully Unregistered")
      
    </script>
    <?php
  }
}
?>