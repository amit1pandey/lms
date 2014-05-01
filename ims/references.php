<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
			if(isset($_REQUEST['submit']))
			{
				$recx=mysql_query("select name from reference where name='".$_REQUEST['name']."'");
				if(mysql_num_rows($recx)<1)
				{
					mysql_query("insert into reference (name) values('".$_REQUEST['name']."')");
					$msg="Recored Entered";
					$success=true;
					$msgshow=true;
				}
				else
				{
					$msg="Course Allready Exist";
					$success=false;
					$msgshow=true;
					}
			
			}
			
			if(isset($_GET['del']))
			{
            mysql_query("delete from reference where id='".$_GET['del']."'");
			$msg="Recored Deleted";
			$success=true;
			$msgshow=true;
			}
			
			if(isset($_GET['edit']))
			{
            $rec=mysql_query("select * from reference where id='".$_GET['edit']."'");
			$rows=mysql_fetch_array($rec);
			}
			
			
			
			if(isset($_REQUEST['update']))
			{
				$recx=mysql_query("select name from reference where name='".$_REQUEST['name']."' and id!='".$_REQUEST['id']."'" );
				if(mysql_num_rows($recx)<1)
				{
            	mysql_query("update reference set name='".$_REQUEST['name']."' where id='".$_REQUEST['id']."'");
				echo "<script>window.location ='courses.php?success=1';</script>";
				}
				else
				{
				$msg="Course Allready Exist";
					$success=false;
					$msgshow=true;
					}
			}
			
			if(isset($_GET['success']))
			{
				$msg="Recored updated";
				$success=true;
				$msgshow=true;
				}
			
			
			?>	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>References</h1>
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
					

					
					<div class="widget">
						
						<div class="widget-header">
							<span class="icon-article"></span>
							<h3>Add New Reference</h3>
						</div> <!-- .widget-header -->
                        
						<div class="widget-content">
                        
							
							<form class="form uniformForm validateForm" method="post" action="">
								
								<div class="field-group">
									<label for="name">Reference Name:</label>
									<div class="field">
                                    	<input type="hidden" name="id" id="id" size="30" value="<?php if(isset($rows['id'])){echo $rows['id'];}?>"/>
										<input type="text" name="name" id="name" size="30" class="validate[required]" value="<?php if(isset($rows['name'])){echo $rows['name'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
						  <div class="actions">						
									<button type="submit" class="btn btn-error" name="<?php if(isset($_GET['edit'])){echo "update";}else{echo "submit";}?>"><?php if(isset($_GET['edit'])){echo "Update";}else{echo "Submit";}?></button>
								</div> <!-- .actions -->
								
							</form>
							
							
						</div> <!-- .widget-content -->
						
					</div> <!-- .widget --><!-- .widget -->	
					
				</div> <!-- .grid -->			
			
            <div class="grid-24">
				<?php
                $result=mysql_query("select * from reference order by id DESC")
				?>
				
				<div class="widget widget-table">
					
					<div class="widget-header">
						<span class="icon-list"></span>
						<h3 class="icon aperture">List of References</h3>
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Qualification Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php while($row=mysql_fetch_array($result)) {?>
							<tr class="gradeA">
								<td><?php echo $row['name']; ?></td>
								<td><a href="references.php?edit=<?php echo $row['id'];?>">Edit</a> | <a href="references.php?del=<?php echo $row['id'];?>">Del</a></td>
							</tr>
                            <?php } ?>															
						</tbody>
					</table>	

						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget -->	
				

			</div>
		</div> <!-- .container -->
		
	</div> <!-- #content -->

<?php include("footer.php");?>

</body>
</html>