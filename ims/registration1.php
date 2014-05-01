

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Canvas Admin - Forms</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
		
	<link rel="stylesheet" href="stylesheets/all.css" type="text/css" />
	
	<!--[if gte IE 9]>
	<link rel="stylesheet" href="stylesheets/ie9.css" type="text/css" />
	<![endif]-->
	
	<!--[if gte IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" />
	<![endif]-->

</head>

<body>

<div id="wrapper">
	
	<div id="header">
		<h1><a href="dashboard.html">Canvas Admin</a></h1>		
		<a href="javascript:;" id="reveal-nav">
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
		</a>
	</div> <!-- #header -->
	
	<div id="search">
		<form>
			<input type="text" name="search" placeholder="Search..." id="searchField" />
		</form>		
	</div> <!-- #search -->
	
	<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav">
				<span class="icon-home"></span>
				<a href="dashboard.html">Dashboard</a>				
			</li>
						
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Sample Pages</a>				
				
				<ul class="subNav">
					<li><a href="invoice.html">Invoice</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="people.html">People Directory</a></li>
					<li><a href="calendar.html">Calendar</a></li>
					<li><a href="stream.html">Stream</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="reports.html">Reports</a></li>
				</ul>						
			</li>	
			
			<li id="navForms" class="nav active">
				<span class="icon-article"></span>
				<a href="javascript:;">Form Elements</a>
				
				<ul class="subNav">
					<li><a href="forms.html">Layouts & Elements</a></li>
					<li><a href="forms-validations.html">Validations</a></li>					
				</ul>	
			</li>
			
			<li id="navType" class="nav">
				<span class="icon-info"></span>
				<a href="typography.html">Typography</a>	
			</li>
			
			<li id="navGrid" class="nav">
				<span class="icon-layers"></span>
				<a href="grids.html">Grid Layout</a>	
			</li>
			
			<li id="navTables" class="nav">
				<span class="icon-list"></span>
				<a href="tables.html">Tables</a>	
			</li>
			
			<li id="navButtons" class="nav">
				<span class="icon-compass"></span>
				<a href="buttons.html">Buttons & Icons</a>	
			</li>
			
			<li id="navInterface" class="nav">
				<span class="icon-equalizer"></span>
				<a href="interface.html">Interface Elements</a>	
			</li>
			
			<li id="navCharts" class="nav">
				<span class="icon-chart"></span>
				<a href="charts.html">Charts & Graphs</a>
			</li>
			
			<li id="navMaps" class="nav">
				<span class="icon-map-pin-fill"></span>
				<a href="maps.html">Map Elements</a>
			</li>
			
			<li class="nav">
				<span class="icon-denied"></span>
				<a href="javascript:;">Error Pages</a>
				
				<ul class="subNav">
					<li><a href="error-401.html">401 Page</a></li>
					<li><a href="error-403.html">403 Page</a></li>
					<li><a href="error-404.html">404 Page</a></li>	
					<li><a href="error-500.html">500 Page</a></li>	
					<li><a href="error-503.html">503 Page</a></li>					
				</ul>	
			</li>
		</ul>
		
				
	</div> <!-- #sidebar -->
	
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Forms</h1>
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
							
							<form class="form uniformForm validateForm" method="post" action="">
								<div style="float:left; width:50%">	
								<div class="field-group">
									<label for="name">Students Name:</label>
									<div class="field">
										<input type="text" name="name" id="name" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="name">Father's Name:</label>
									<div class="field">
										<input type="text" name="fname" id="fname" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="name">Address:</label>
									<div class="field">
										<input type="text" name="address" id="address" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="name">City:</label>
									<div class="field">
										<input type="text" name="city" id="city" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="name">State:</label>
									<div class="field">
										<input type="text" name="state" id="state" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="name">Country:</label>
									<div class="field">
										<input type="text" name="country" id="country" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                
                                
                               
                                
                                                               
                                <div class="field-group">
									<label for="address">Phone:</label>
									<div class="field">
										<input type="text" name="phone" id="phone" size="23" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="address">Mobile:</label>
									<div class="field">
										<input type="text" name="mobile" id="mobile" size="23" class="validate[required]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group">
									<label for="email">Email:</label>
									<div class="field">
										<input type="text" name="email" id="email" size="32" class="validate[required,custom[email]]" />	
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group control-group inline">	
									<label>Gender:</label>	
					
									<div class="field">
										<input type="radio" name="gender" id="radio1" value="m" class="validate[required]"/>
										<label for="radio1">Male</label>
									</div>
					
									<div class="field">
										<input type="radio" name="gender" id="radio2" value="f" class="validate[required]" />
										<label for="radio2">Female</label>
									</div>
								</div>
                                
                               
                                
                                </div><div style="float:left;width:50%;">
                                
                                 <div class="field-group">		
									<label>Qualification:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from qualification");?>
										<select name="qualification" id="qualification" class="validate[required]">
											<option value="">Select</option>
                                            <?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
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
											<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Duration:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from course");?>
										<select name="duration " id="duration" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['duration'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group">		
									<label>Slot time:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from course");?>
										<select name="slottime " id="slottime" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['slottime'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                 <div class="field-group">		
									<label>Teacher:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from course");?>
										<select name="teacher" id="teacher" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['teacher'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group" style="float:left;">
									<label for="ip">Start Date:</label>
									<div class="field">
										<input type="text" name="datepicker" id="datepicker" size="10" />	
									
									</div>
								</div> <!-- .field-group -->
                                
                                <div class="field-group" style="float:left">
									<label for="ip">End Date:</label>
									<div class="field">
										<input type="text" name="datepicker" id="datepicker" size="10" />	
									
									</div>
                                    
                                    
								</div> <!-- .field-group -->
                                <div class="clear"></div>
                                
                                
                                
                                
                                <div class="field-group">		
									<label>Reference:</label>
			
									<div class="field">
                                    <?php $recs=mysql_query("select * from reference");?>
										<select name="reference" id="reference" class="validate[required]">
											<option value="">Select</option>
											<?php while($row=mysql_fetch_array($recs)){?>
											<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
										</select>
									</div>
                                    		
								</div> <!-- .field-group -->
                                
                                <div class="field-group inlineField">	
									<label for="myfile">File Input:</label>
			
									<div class="field">
										<input type="file" name="myfile" id="myfile" class="validate[required]"/>
									</div>	
								</div>
                                
                                <div class="field-group inlineField">	
									<img src="images/gallery/coins_small.jpg" width="100px" height="100px"/>
								</div>
								
						 
								</div>
                                <div style="clear:both;"></div>
								
						  <div class="actions">						
									<button type="submit" class="btn btn-error" name="submit">Submit</button>
								</div> <!-- .actions -->
								
							</form>
							
							
						</div> <!-- .widget-content -->
						
					</div> <!-- .widget --><!-- .widget -->	
					
				</div> <!-- .grid -->			
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->
	
	<div id="topNav">
		 <ul>
		 	<li>
		 		<a href="#menuProfile" class="menu">John Doe</a>
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					<div class="menu-content">
						<ul class="">
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Edit Settings</a></li>
							<li><a href="javascript:;">Suspend Account</a></li>
						</ul>
					</div>
				</div>
	 		</li>
		 	<li><a href="javascript:;">Upgrade</a></li>
		 	<li><a href="index-2.html">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
	
	<div id="quickNav">
		<ul>
			<li class="quickNavMail">
				<a href="#menuAmpersand" class="menu"><span class="icon-book"></span></a>		
				
						

				<div id="menuAmpersand" class="menu-container quickNavConfirm">
					<div class="menu-content cf">							
						
						<div class="qnc qnc_confirm">
							
							<h3>Confirm</h3>
					
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #2</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<div class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Confirm #3</span>
									<span class="qnc_preview">Duis aute irure dolor in henderit in voluptate velit esse cillum dolore.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
								
								<div class="qnc_actions">						
									<button class="btn btn-primary btn-small">Accept</button>
									<button class="btn btn-quaternary btn-small">Not Now</button>
								</div>
							</div>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
															
						</div> <!-- .qnc -->	
					</div>
				</div>
			</li>
			<li class="quickNavNotification">
				<a href="#menuPie" class="menu"><span class="icon-chat"></span></a>
				
				<div id="menuPie" class="menu-container">
					<div class="menu-content cf">					
						
						<div class="qnc">
							
							<h3>Notifications</h3>
					
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #1</span>
									<span class="qnc_preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_item">
								<div class="qnc_content">
									<span class="qnc_title">Notification #2</span>
									<span class="qnc_preview">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</span>
									<span class="qnc_time">3 hours ago</span>
								</div> <!-- .qnc_content -->
							</a>
							
							<a href="javascript:;" class="qnc_more">View all Confirmations</a>
							
						</div> <!-- .qnc -->
					</div>
				</div>				
			</li>
		</ul>		
	</div> <!-- .quickNav -->
	
	
</div> <!-- #wrapper -->

<div id="footer">
	Copyright &copy; 2012, MadeByAmp Themes.
</div>


<script src="javascripts/all.js"></script>

<script>
$(function () { 
	$( "#datepicker" ).datepicker();
	$( "#datepicker_inline" ).datepicker();
	$('#colorpickerHolder').ColorPicker({flat: true});
	$('#timepicker').timepicker ({ 
		showPeriod: true 
		, showNowButton: true
		, showCloseButton: true
	});
	
	$('#timepicker_inline_div').timepicker({
	   defaultTime: '9:20'
	});		
		
	$('#colorSelector').ColorPicker({
		color: '#FF9900',
		onShow: function (colpkr) {
			$(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			$(colpkr).fadeOut(500);
			return false;
		},
		onSubmit: function (hsb, hex, rgb, el) {
			$(el).ColorPickerHide ();	
		},
		onChange: function (hsb, hex, rgb) {
			$('#colorSelector div').css({ 'background-color': '#' + hex });
			$('#colorpickerField1').val ('#' + hex);
		}
	});
	
	$('#colorpickerField1').live ('keyup', function (e) {
		var val = $(this).val ();
		val = val.replace ('#', '');
		$('#colorSelector div').css({ 'background-color': '#' + val });
		$('#colorSelector').ColorPickerSetColor(val);
	});

});

</script>

</body>
</html>