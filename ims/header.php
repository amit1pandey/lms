<?php include("config/head.php");?>
<?php include("config/function.php");?>
<?php include("config/dbconnect.php");?>
<body>

<div id="wrapper">
	
	<div id="header">
		<h1><a href="dashboard.php">Canvas Admin</a></h1>		
		
		<a href="javascript:;" id="reveal-nav">
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
			<span class="reveal-bar"></span>
		</a>
	</div> <!-- #header -->
	<link rel="shortcut icon" href="../images/Favi.png" />	
	<div id="search">
		<form>
			<input type="text" name="search" placeholder="Search..." id="searchField" />
		</form>		
	</div> <!-- #search -->
<?php if(isset($_SESSION['adminName'])) {?>
<div id="topNav">
		 <ul>
		 	<li>
		 		<a href="#menuProfile" class="menu"><?php echo $_SESSION['adminName'];?></a>
		 		
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
		 	<li><a href="logout.php">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->
<?php } ?>	
	<div id="quickNav">
		<ul>
			<li class="quickNavMail">
				<a href="#menuAmpersand" class="menu"><span class="icon-book"></span></a>		
				
				<span class="alert">3</span>		

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