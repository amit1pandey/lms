<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
if(isset($_GET['del']))
{
mysql_query("delete from enquiry where id='".$_GET['del']."'");
$msg="Record Deleted";
$success=false;
$msgshow=true;
}
?>	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Enquiry</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			<?php if(isset($msgshow) && $msgshow==true){?>
            
                        <div class="notify notify-<?php if($success==true) {echo "success";} else{echo "error";}?>">
						
						<a href="javascript:;" class="close">&times;</a>
						
						<h3>Notification</h3>
						
						<p><?php echo $msg; ?></p>
					</div> <!-- .notify -->
                    <?php } ?>
			
			<div class="grid-24">
				
				
				<div class="widget widget-table">
					
					<div class="widget-header">
						<span class="icon-list"></span>
						<h3 class="icon aperture">List of Enquiries</h3>
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
                    <?php $result=mysql_query("select * from enquiry where status='0' order by id DESC");?>
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
                                <th>Email</th>
								<th>Date of Enquiry</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php while($row=mysql_fetch_array($result)){?>
							<tr class="gradeA">
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['email'];?></td>
								<td class="center"><?php echo substr($row['dateofenquiry'],0,10);?></td>
                                <td><a href="enquiryadd.php?edit=<?php echo $row['id'];?>">Edit</a> | <a href="enquiry.php?del=<?php echo $row['id'];?>">Del</a> | <a href="register.php?regid=<?php echo $row['id'];?>">Register</a></td>
							</tr>
						<?php } ?>														
						</tbody>
					</table>	

						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->	
				
				
				
				
				
				
				
			</div> <!-- .grid -->			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->

<?php include("footer.php");?>

</body>
</html>