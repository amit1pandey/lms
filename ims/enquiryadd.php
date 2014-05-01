<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
if(isset($_REQUEST['submit']))
{
	mysql_query("insert into enquiry (name, fathersName, address, city, state, country, phone, mobile, email, gender, qualification, courseinterested, reference, dateofenquiry, dateofentry, author) values('".$_REQUEST['name']."','".$_REQUEST['fathersname']."','".$_REQUEST['address']."','".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['country']."','".$_REQUEST['phone']."','".$_REQUEST['mobile']."','".$_REQUEST['email']."','".$_REQUEST['gender']."','".$_REQUEST['qualification']."','".$_REQUEST['courseinterested']."','".$_REQUEST['reference']."','".$_REQUEST['dateofenquiry']."','".date('Y-m-d h:i:s')."','".$_SESSION['adminName']."')");
	$msg="Recored Entered";
	$success=true;
	$msgshow=true;
	}

if(isset($_GET['edit']))
{
	$result=mysql_query("select * from enquiry where id='".$_GET['edit']."'");
	$rows=mysql_fetch_array($result);
	}

if(isset($_REQUEST['update']))
{
	mysql_query("update enquiry set name='".$_REQUEST['name']."', fathersName='".$_REQUEST['fathersname']."', address='".$_REQUEST['address']."', city='".$_REQUEST['city']."', state='".$_REQUEST['state']."', country='".$_REQUEST['country']."', phone='".$_REQUEST['phone']."', mobile='".$_REQUEST['mobile']."', email='".$_REQUEST['email']."', gender='".$_REQUEST['gender']."', qualification='".$_REQUEST['qualification']."', courseinterested='".$_REQUEST['courseinterested']."', reference='".$_REQUEST['reference']."', dateofenquiry='".$_REQUEST['dateofenquiry']."', author='".$_SESSION['adminName']."' where id='".$_REQUEST['id']."'");
	$msg="Recored Updated";
	$success=true;
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
					

					
					<div class="widget">
						
						<div class="widget-header">
							<span class="icon-article"></span>
							<h3>Add New Enquiry</h3>
						</div> <!-- .widget-header -->
						
						<div class="widget-content">
							<form class="form uniformForm validateForm" method="post" action="enquiryadd.php">
								<div style="float:left; width:50%">	
								<div class="field-group">
									<label for="name">Name:</label>
									<div class="field">
                                    	<input type="hidden" name="id" id="id" size="23" value="<?php if(isset($rows['id'])){echo $rows['id'];}?>"/>
										<input type="text" name="name" id="name" size="23" class="validate[required]" value="<?php if(isset($rows['name'])){echo $rows['name'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="fathersname">Father's Name:</label>
									<div class="field">
										<input type="text" name="fathersname" id="fathersname" size="23" value="<?php if(isset($rows['fathersName'])){echo $rows['fathersName'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
								
                                <div class="field-group">
									<label for="address">Address:</label>
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
									<label for="address">Phone:</label>
									<div class="field">
										<input type="text" name="phone" id="phone" size="23" value="<?php if(isset($rows['phone'])){echo $rows['phone'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                </div><div style="float:left;width:50%;">
                                
                                
                                <div class="field-group">
									<label for="address">Mobile:</label>
									<div class="field">
										<input type="text" name="mobile" id="mobile" size="23" class="validate[required,custom[number]]" value="<?php if(isset($rows['mobile'])){echo $rows['mobile'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="email">Email:</label>
									<div class="field">
										<input type="text" name="email" id="email" size="32" class="validate[required,custom[email]]" value="<?php if(isset($rows['email'])){echo $rows['email'];}?>"/>	
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
                                
                                <div class="field-group">		
									<label>Course Interested:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from course");?>
										<select name="courseinterested" id="courseinterested" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>" <?php if( isset($rows['courseinterested']) && $rows['courseinterested']==$row['id']){echo "selected";}?>><?php echo $row['name'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Reference:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from reference");?>
										<select name="reference" id="reference" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>" <?php if(isset($rows['reference']) && $rows['reference']==$row['id']){echo "selected";}?>><?php echo $row['name'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
								
						  <div class="field-group">
									<label for="date">Date of Enquiry:</label>
									<div class="field">
										<input type="text" name="dateofenquiry" id="dateofenquiry" size="23" class="validate[required,custom[date]]" value="<?php if(isset($rows['dateofenquiry'])){echo substr($rows['dateofenquiry'],0,10);}?>" readonly />
									</div>
								</div> <!-- .field-group -->
								</div>
                                <div style="clear:both;"></div>
								
						  <div class="actions">						
									<button type="submit" class="btn btn-error" name="<?php if(isset($_GET['edit'])){echo "update";} else {echo "submit";}?>"><?php if(isset($_GET['edit'])){echo "Update";} else {echo "Submit";}?></button>
								</div> <!-- .actions -->
								
							</form>
							
							
						</div> <!-- .widget-content -->
						
					</div> <!-- .widget --><!-- .widget -->	
					
				</div> <!-- .grid -->			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->

<?php include("footer.php");?>
<script>
		$( "#dateofenquiry" ).datepicker({dateFormat: 'yy-mm-dd'});
	 </script>
</body>
</html>