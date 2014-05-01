<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
if(isset($_GET['del']))
{
mysql_query("delete from register where id='".$_GET['del']."'");
$msg="Record Deleted";
$success=false;
$msgshow=true;
}
?>	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Registration</h1>
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
						<h3 class="icon aperture">List of Registered Students</h3>
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
                    <?php $result=mysql_query("select * from register where status='1' order by id DESC");             
					 
					 ?>            
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
                                <th>Email</th>
								<th>Date of Registration</th>
                                <th>Fee Date</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php  while($row=mysql_fetch_array($result)){?>
                        <?php $qur=mysql_query("select * from feeplan where regid='".$row['id']."' and status=1 ");        $dd="";
						$Chkp="";	
						$d="";
						$date=date('Y-m-d');
							while($rw=mysql_fetch_array($qur))
							{
							 $dd.=$rw['regid'];
							 $Chkp.=$rw['installments'];
							 $d.=$rw['date'];
							}
						
						  ?><?php 
						  $plusonemonth = date("Y-m-d",strtotime("+1 months"));
						  ?>
							<tr class="gradeA">    
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['email'];?></td>
                             
								<td class="center"><?php echo date("d-M-Y",strtotime($row['dateofregistration']));?></td>
                                <td><?php if($d>=$date and $d<=$plusonemonth){ echo date("d-M-Y",strtotime($d)); } ?></td>
                                <td><a href="registration.php?edit=<?php echo $row['id'];?>">Edit</a> | <a href="listregistration.php?del=<?php echo $row['id'];?>">Del<?php echo $qur['regid'];?></a> | <a href="feeplan.php?regid=<?php echo $row['id'];?>&cid=<?php echo $row['course'];?>"><?php if(empty($dd)){echo "Fee Plan";}elseif($Chkp==0){ echo "Paid";}else{echo "Fee Details"; } ?></a></td>
							
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