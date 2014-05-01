<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
if(isset($_REQUEST['submit']))
{
	mysql_query("insert into faculty (empcode, name, address, city, state, country, taddress, tcity, tstate, tcountry, phone, mobile, email, gender, qualification, experience, picture) values('0','".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['country']."','".$_REQUEST['taddress']."','".$_REQUEST['tcity']."','".$_REQUEST['tstate']."','".$_REQUEST['tcountry']."','".$_REQUEST['phone']."','".$_REQUEST['mobile']."','".$_REQUEST['email']."','".$_REQUEST['gender']."','".$_REQUEST['qualification']."','".$_REQUEST['experience']."','".$_REQUEST['picture']."')");
	$id=mysql_insert_id();
	$str=date("ymd");
	mysql_query("update faculty set empcode='".$id."MRPH".$str."' where id='".$id."'");	
	$msg="Recored Entered";
	$success=true;
	$msgshow=true;
	}

if(isset($_GET['edit']))
{
	$result=mysql_query("select * from enquiry where id='".$_GET['edit']."'");
	$rows=mysql_fetch_array($result);
	}

?>	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Faculty</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
			
			<div class="grid-24">
					

					
					<div class="widget">
						
						<div class="widget-header">
							<span class="icon-article"></span>
							<h3>Add New Faculty</h3>
						</div> <!-- .widget-header -->
						
						<div class="widget-content">
							
							<form class="form uniformForm validateForm" method="post" action="faculty.php">
								<div style="float:left; width:32%">	
								<div class="field-group">
									<label for="name">Name:</label>
									<div class="field">
                                    	<input type="hidden" name="id" id="id" size="23" value="<?php if(isset($rows['id'])){echo $rows['id'];}?>"/>
										<input type="text" name="name" id="name" size="23" class="validate[required]" value="<?php if(isset($rows['name'])){echo $rows['name'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
								
                                
                                 <div class="field-group">
									<label for="email">Email:</label>
									<div class="field">
										<input type="text" name="email" id="email" size="23" class="validate[required,custom[email]]" value="<?php if(isset($rows['email'])){echo $rows['email'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="address">Mobile:</label>
									<div class="field">
										<input type="text" name="mobile" id="mobile" size="23" class="validate[required]" value="<?php if(isset($rows['mobile'])){echo $rows['mobile'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                               
                                
                                <div class="field-group control-group inline">	
									<label>Gender:</label>	
					
									<div class="field">
										<input type="radio" name="gender" id="radio1" value="m" <?php if(isset($rows['gender']) && $rows['gender']=='m'){echo "checked";}?>/>
										<label for="radio1">Male</label>
									</div>
					
									<div class="field">
										<input type="radio" name="gender" id="radio2" value="f" <?php if(isset($rows['gender']) && $rows['gender']=='f'){echo "checked";} ?>/>
										<label for="radio2">Female</label>
									</div>
								</div>
                                
                                <div class="field-group">
									<label for="address">Phone:</label>
									<div class="field">
										<input type="text" name="phone" id="phone" size="23" value="<?php if(isset($rows['phone'])){echo $rows['phone'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Qualification:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from qualification");?>
										<select name="qualification" id="qualification">
											<option value="">Select</option>
                                            <?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['qualification']) && $rows['qualification']==$row['id']){echo "selected";}?>><?php echo $row['name'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                </div><div style="float:left;width:32%;">
                                
                                <div class="field-group">
									<label for="address">Permanent Address:</label>
									<div class="field">
										<input type="text" name="address" id="address" size="23" value="<?php if(isset($rows['address'])){echo $rows['address'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                <div class="field-group">
									<label for="address">City:</label>
									<div class="field">
										<input type="text" name="city" id="city" size="23" value="<?php if(isset($rows['city'])){echo $rows['city'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>State:</label>
									<?php $records=mysql_query("select * from states");?>
									<div class="field">
										<select name="state" id="state" >
                                        	<option value="">Select</option>
											<?php while($row=mysql_fetch_array($records)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['state']) && $rows['state']==$row['id']){echo "selected";}?>><?php echo $row['statename'];?></option>
											<?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Country:</label>
									<?php $records=mysql_query("select * from country");?>
									<div class="field">
										<select name="country" id="country" >
                                        	<option value="">Select</option>
											<?php while($row=mysql_fetch_array($records)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['country']) && $rows['country']==$row['id']){echo "selected";}?>><?php echo $row['countryname'];?></option>
											<?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="fathersname">Experience:</label>
									<div class="field">
										<textarea name="experience" id="experience" rows="5" cols="30" ><?php if(isset($rows['experience'])){echo $rows['experience'];}?></textarea>	
									</div>
								</div> <!-- .field-group -->
                                
                                
                                
								</div><div style="float:left;width:32%;">
                                	<div class="field-group">
									<label for="address">Temporary Address:</label>
									<div class="field">
										<input type="text" name="taddress" id="taddress" size="23" value="<?php if(isset($rows['taddress'])){echo $rows['taddress'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                <div class="field-group">
									<label for="address">City:</label>
									<div class="field">
										<input type="text" name="tcity" id="tcity" size="23" value="<?php if(isset($rows['tcity'])){echo $rows['tcity'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>State:</label>
									<?php $records=mysql_query("select * from states");?>
									<div class="field">
										<select name="tstate" id="tstate" >
                                        	<option value="">Select</option>
											<?php while($row=mysql_fetch_array($records)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['tstate']) && $rows['tstate']==$row['id']){echo "selected";}?>><?php echo $row['statename'];?></option>
											<?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Country:</label>
									<?php $records=mysql_query("select * from country");?>
									<div class="field">
										<select name="tcountry" id="tcountry" >
                                        	<option value="">Select</option>
											<?php while($row=mysql_fetch_array($records)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['tcountry']) && $rows['tcountry']==$row['id']){echo "selected";}?>><?php echo $row['countryname'];?></option>
											<?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group inlineField">	
									<label for="myfile">Picture:</label>
			
									<div class="field">
										<input type="file" name="picture" id="picture" class="validate[required]"/>
									</div>	
								</div>
                                </div>
                                <div style="clear:both;"></div>
								
						  <div class="actions">						
									<button type="submit" class="btn btn-error" name="<?php if(isset($_GET['edit'])){echo "update";} else {echo "submit";}?>"><?php if(isset($_GET['edit'])){echo "Update";} else {echo "Submit";}?></button>
								</div> <!-- .actions -->
								
							</form>
							
							
						</div> <!-- .widget-content -->
						
					</div> <!-- .widget --><!-- .widget -->	
					
				</div> <!-- .grid -->			
			
            <div class="grid-24">
				
				
				<div class="widget widget-table">
					
					<div class="widget-header">
						<span class="icon-list"></span>
						<h3 class="icon aperture">List of Enquiries</h3>
					</div> <!-- .widget-header -->
					
					<div class="widget-content">
                    <?php
                $result=mysql_query("select * from faculty order by id DESC")
				?>
						<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
                            	<th>Emp. Code</th>
								<th>Name</th>
								<th>Mobile</th>
								<th>Email</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php while($row=mysql_fetch_array($result)){?>
							<tr class="gradeA">
								<td><?php echo $row['empcode'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['email'];?></td>
                                <td>Edit | Del</td>
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