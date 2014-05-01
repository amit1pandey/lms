<?php include("header.php");?>
<?php
if(isset($_REQUEST['del']))
{
	$id=$_REQUEST['del'];
	
	//listregister.php
    mysql_query("UPDATE register SET status=0 where id='".$id."'");
	mysql_query("UPDATE feeplan SET status=0 WHERE regid='".$id."'");
    header('location:listregister.php');	
}
?>