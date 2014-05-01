 <?php
	$myButtonText = "PAID";
	if(isset($_REQUEST['ins1']))
	{
				$id=$_POST['ID']; 
				$ins1=$_POST['IN'];
				$dte=$_POST['dat'];
			    $query= "select * from feeplan where regid='".$id."'";		
				$result = mysql_query($query) or trigger_error(mysql_error().$query);			 
                $row2=mysql_fetch_array($result);
				$a=$row2['total'];
				$b=$row2['installments'];
				$ins=$row2['ins'];
				$in=$ins-1;
			
				$pp=$row2['P_ins'];
				$dte=date('d-M-Y');
				$dte1=$row2['p_date'];
				$dte3=$dte.",".$dte1;
				$date = $row2['date'];
                $ss = strtotime($date);
                $dd=$ins1.",".$pp;
		mysql_query("update feeplan set installments='$tc',total='$c',ins='$in',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
	}
?>
 <script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
 <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<script type="text/javascript" >
function get_accept(input)
	{
		//alert(input);
	}
	function changeText(el)
	{
		el.innerHTML = '<?php echo $myButtonText;?>';
	}
        $(function() {
            $("#commitedfee").focus(function() {
			
               a = $("#coursefee").val(); 		   
			    b = $("#discount").val(); 
				
			      var c=a-b;
				  
                $("#commitedfee").val(c);
            });
	
	 $( "#dialog" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "explode",
	   width: '510'
            });
			
	$("#ins1").click(function(){
	var ID=$("#hid").val();
	var IN=$("#ins").val();
	var dat=$("#date").val();
   // alert(IN);	
	$.post('fee_up.php', {ID: ID,IN: IN,dat: dat},
	function(data){
	
	//$("#message").html(data);
	//$("#message").hide();
	 $("#message").text("PAID");
	 $( "#dialog" ).dialog( "open");
            return false;

	});
	return false;
	});
	
function replace(){$(this).after($(this).text()).remove()}
    
    $('button.print').live('click', function(event){
        var print_window = window.open(),
            print_document = $('div.content').clone();
      /*  
        print_document.find('a')
                      .each(replace);
        */
        print_window.document.open();
        print_window.document.write(print_document.html());
        print_window.document.close();
        print_window.print();
        print_window.close();
    });	
	
			
 });
   //(function(){
	
	//});
		
</script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />



<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
            $id=$_REQUEST['regid'];  
			if(isset($_REQUEST['submit']))
			{   
				$cfee=$_REQUEST['coursefee'];
				$disc=$_REQUEST['discount'];
				$comtfee=$_REQUEST['commitedfee'];
				$rfee=$_REQUEST['regfee'];
				$state=$_REQUEST['state'];
				$tol=$comtfee-$rfee;
				$inst=$tol/$state;
				$date=date('Y-m-d');
			 mysql_query("insert into feeplan(regid,coursefee,commitedfee,discount,installments,regfee,total,ins,date,status,dofp)values('$id','$cfee','$comtfee','$disc','$inst','$rfee','$tol','$state','$date','1','$date')");
		
				
			}
			if(isset($_GET['regid']))
			{
            $regrec=mysql_query("select * from register where id='".$_GET['regid']."'");
			$regrows=mysql_fetch_array($regrec);
			}
			
			if(isset($_GET['cid']))
			{
            $rec=mysql_query("select * from course where id='".$_GET['cid']."'");
			$rows=mysql_fetch_array($rec);
			}
			
			
			
			if(isset($_REQUEST['update']))
			{
				$recx=mysql_query("select name from course where name='".$_REQUEST['name']."' and id!='".$_REQUEST['courseid']."'" );
				if(mysql_num_rows($recx)<1)
				{
            	mysql_query("update course set name='".$_REQUEST['name']."', description='".$_REQUEST['description']."', duration='".$_REQUEST['duration']."', cost='".$_REQUEST['cost']."' where id='".$_REQUEST['courseid']."'");
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
	  <div id="dialog" title="Fee Receipt" style="width: 522px; " >                 
		  <div class='content' style="height:400px;">
		 	<table style="width:400px; " >
                            <tr>
			   		<td>RegNo :</td>
			   		<td><?php echo $regrows['regno']; ?></td>
			 	</tr>
			        <tr>
					<td>Name :</td>
			   		<td><?php echo  $regrows['name']; ?></td>
			 	</tr>
				 <tr> 
				       <td>Father Name : </td>
			   		<td><?php  echo  $regrows['fathersname']; ?></td>
			 	</tr>
				 <tr>
				 	<td>Email ID :</td>
			   		<td><?php echo  $regrows['email']; ?></td>
			 	</tr>
				 <tr>
				 	<td>Mobile :</td>
			   		<td><?php echo  $regrows['mobile']; ?></td>
			 	</tr>

			</table>
			</div>
                  <button class='print'>Print</button>
	   </div>	
					<div class="widget">
						
						<div class="widget-header">
							<span class="icon-article"></span>
							<h3>Fee Plan</h3>
						</div> <!-- .widget-header -->
                        
						<div class="widget-content">
                          <?php						
							$query= mysql_query("select *from feeplan where regid='$id'");							
							$row= mysql_fetch_array($query); 
							if(mysql_num_rows($query)>0)
							{
								
							}else{
												
						  ?>
							
							<form class="form uniformForm validateForm" method="post" action="">
<div style="float:left; width:50%">								
<div class="field-group">
								  <label for="name">Course Fee:</label>
									<div class="field">
									  <input type="text" name="coursefee" id="coursefee" size="30" class="validate[required]" value="<?php if(isset($rows['cost'])){echo $rows['cost'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									
									  <label for="fathersname">Discount:</label>
									<div class="field">
									  <input type="text" name="discount" id="discount" size="30" class="validate[required]" value="<?php if(isset($rows['discount'])){echo $rows['discount'];}?>"/>
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									  <label>Commited Fee:</label>
			
									<div class="field">
									  <input type="text" name="commitedfee" id="commitedfee" size="30" class="validate[required]" value="<?php if(isset($rows['commitedfee'])){echo $rows['commitedfee'];}?>"/>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									
									  <label for="fathersname">Registration Fee:</label>
									<div class="field">
									  <input type="text" name="regfee" id="regfee" size="30" class="validate[required]" value="<?php if(isset($rows['regfee'])){echo $rows['regfee'];}?>"/>
									</div>
								</div> <!-- .field-group -->
                                
                               <!-- <div class="field-group">
									<label for="address">Comission:</label>
									<div class="field">
										<input type="text" name="commission" id="commission" size="30" class="validate[required,custom[integer]]" value="<?php // if(isset($rows['commission'])){echo $rows['commission'];}?>"/>	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="address">Installments:</label>
									<div class="field">
									  <select name="state" id="state">
									    <option value="">Select</option>
									    <?php for($month=1;$month<$rows['duration'];$month++){?>
									    <option value="<?php echo $month;?>"><?php echo $month;?></option>
									    <?php } ?>
								      </select>
									</div>
                                              <div class="actions">						
									<button type="submit" class="btn btn-error" name="<?php if(isset($_GET['edit'])){echo "update";}else{echo "submit";}?>"><?php if(isset($_GET['edit'])){echo "Update";}else{echo "Submit";}?></button>
								</div>
								</div> <!-- .field-group -->
                          </div>
                         
              
                      <?php } ?>
                          
                          <div style="float:left; width:50%">
                          Reg No. : <?php if(isset($regrows['regno'])){ echo $regrows['regno'];}?> <br />
						  <strong>
                         
						  <?php if(isset($regrows['name'])){ echo $regrows['name'];}?>
						  </strong><br />
                          <?php if(isset($regrows['address'])){ echo $regrows['address'];}?>, <?php if(isset($regrows['city'])){ echo $regrows['city'];}?><br />
                          <?php if(isset($regrows['state'])){ 
						  echo getState($regrows['state']);}?>, <?php if(isset($regrows['country'])){ echo getCountry($regrows['country']);}?><br />
                          <?php if(isset($regrows['mobile'])){ echo $regrows['mobile'];}?><br />
                         Course Fee: <?php echo $row['coursefee']; ?><br /> 
                         Discount: <?php echo $row['discount']; ?><br />
                         Commitedfee : <?php echo $row['commitedfee']; ?><br />
                         Registration fee: <?php echo $row['regfee']; ?><br />
                         Balance :<?php if(isset($row['installments']) && $row['installments']==0){echo "Your installments Paid"; }else { echo $row['total'];} ?><br /><br /><br />
                          </div>      
                          <div style="clear:both;"></div>      
		 <!-- .actions -->
						
				      </form>

						<?php	
						    $d=$row['ins'];
							$paid=$row['chk'];
						  ?>
                          <input type="hidden" id="hid" value="<?php echo $row['regid']; ?>"  /> 
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th>R_ID</th>
							      <th>Status</th>
							      <th>Course</th>
							      <th class="price">Date</th>
							      <th class="total">installments</th>
						        </tr>
						      </thead>
							  <tbody>
                             
                               <?php if(isset($row['installments']) && $row['installments']==0)
							   { ?>
							   <tr>
                                  <td><?php echo $row['regid'];?> </td>
                                   <td> <?php echo "Your installments Paid"; ?></td>
                                   <td></td>
                                   <td> </td>
                                   <td> </td>
                               </tr>
							  <?php }
							     ?>
							 
                               <?php
                                for($i=0;$i<$d;$i++)
                                {
								?>
                                 <tr>
							      <td><?php echo $row['regid']; ?></td>
							      <td><div id="message">Pending</div></td>
							      <td><?php echo $rows['name'];?></td>
							      <td class="price"><?php  $date = $row['date'];// current date
 //date('d-m-Y',strtotime($date))."+2 week"; 
  
       $ss = strtotime($date);
       $purchase_date_3months = strtotime("+$i months", $ss);
	   ?><input type="text" style="width:110px;" name="date" id="date" value="<?php echo date("d-M-Y", $purchase_date_3months);  ?>" /> </td>
							      <td class="total"><input type="text" style="width:80px;" value="<?php echo $row['installments'];?>" id="ins" name="ins" />&nbsp;&nbsp; <button name="ins1" id="ins1" value="<?php //echo $row['installments']; ?>" onclick="changeText(this); get_accept('<?php echo $myButtonText;?>'); this.disabled='disabled';">Pay</button></td>
						        </tr>
								<?php
								}
								$ddd=date('d-m-Y');
								$dd=explode(',',$row['P_ins']);
								$zxx=explode(',',$row['p_date']);
                              /*  foreach($dd as $vv)
                                {*/
								
								for($i=0;$i<sizeof($dd)-1;$i++)
								{
								
                                ?>
                               
						    	<tr>
								<td><?php echo $row['regid']; ?></td>
								<td><div id="message">Pending</div></td>
								<td class="csenter"><?php echo $rows['name']; ?></td>
								<td><input type="text" style="width:110px;" disabled="disabled"  value="<?php echo $zxx[$i]; ?>" /></td>
                                <td><input type="text" disabled="disabled" style="width:80px;" value="<?php echo $dd[$i]; ?>" id="pay" /><?php //if($row['installments']==1){echo " ";}else {echo $row['installments'];}?>&nbsp;&nbsp;<button name="ins2" id="ins1" value="<?php //echo $row['installments']; ?>" onclick="changeText(this); get_accept('<?php echo $myButtonText;?>'); this.disabled='disabled';">Pay</button></td>
							     </tr>
                                 <?php } ?>    
						      </tbody>
						  </table>
                       
                        </div> <!-- .widget-content -->
						
					</div> <!-- .widget --><!-- .widget -->	
					
				</div> <!-- .grid -->			
			
            <div class="grid-24">
				<?php
                $result=mysql_query("select * from course order by id DESC")
				?>
				
				<!--<div class="widget widget-table">
					
				<!--	<div class="widget-header">
						<span class="icon-list"></span>
					<!--	<h3 class="icon aperture">List of Courses</h3>-->
					<!--</div><!-- .widget-header -->
					
				<!--	<div class="widget-content">
						<table class="table table-bordered table-striped data-table">
						<!--<thead>
							<tr>
								<th>Course Name</th>
								<th>Duration (Months)</th>
								<th>Cost (Rs.)</th>
								<th>Description</th>
                                <th>Action</th>
							</tr>
						</thead>-->
						<tbody>
                        <?php // while($row=mysql_fetch_array($result)) {?>
<!--							<tr class="gradeA">
								<td><?php // echo $row['name']; ?></td>
								<td class="center"><?php // echo $row['duration']; ?></td>
								<td class="center"><?php // echo $row['cost']; ?></td>
								<td><?php // echo $row['description']; ?></td>
                                <td><a href="courses.php?edit=<?php // echo $row['id'];?>">Edit</a> | <a href="courses.php?del=<?php // echo $row['id'];?>">Del</a></td>-->
							</tr>
                            <?php // } ?>															
				<!--		</tbody>
					</table>	

						
					</div> --> <!-- .widget-content -->
			
				</div> <!-- .widget -->	
				

			</div>
		</div> <!-- .container -->
		
	</div> <!-- #content -->

<?php include("footer.php");?>

</body>
</html>