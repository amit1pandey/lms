<?php include('config/dbconnect.php');?>
<?php
$result=mysql_query("select * from course where id='".$_GET['cid']."'");
	$rows=mysql_fetch_array($result);
	echo $rows['duration']."|".$rows['cost'];
?>