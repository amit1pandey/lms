<?php
include("config/dbconnect.php");
$errMsg="";
if(isset($_REQUEST['submit']))
{
	$record=mysql_query("select * from users where email='".$_REQUEST['email']."' and password='".$_REQUEST['password']."'");
	
	if(mysql_num_rows($record)>0)
	{
		$row=mysql_fetch_array($record);
		if($row['status']==1)
		{
			session_start();
			$_SESSION['adminId']=$row['id'];
			$_SESSION['adminName']=$row['name'];
			$_SESSION['adminEmail']=$row['email'];
			$_SESSION['adminStatus']=$row['status'];
			$_SESSION['adminRole']=$row['role'];
			header('location:dashboard.php');
			}
			else
			{
				$errMsg="Please contact to system Administrator";
				}
		}
		else
		{
			$errMsg="Please enter valid email and Password";
			}
	}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Morph Academy IMS Admin - Login</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="stylesheets/login.css" type="text/css" media="screen" title="no title" />
    
    <link rel="stylesheet" href="stylesheets/all.css" type="text/css" />
	
	<!--[if gte IE 9]>
	<link rel="stylesheet" href="stylesheets/ie9.css" type="text/css" />
	<![endif]-->
	
	<!--[if gte IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" />
	<![endif]-->
</head>

<body>

<div id="login">
	<h1>Dashboard</h1>
	<div id="login_panel">
		<form action="" method="post" accept-charset="utf-8" class="form uniformForm validateForm">	
        <?php if($errMsg<>"") echo $errMsg; ?>	
			<div class="login_fields">
				<div class="field">
					<label for="email">Email</label>
					<input type="text" name="email" value="" id="email" tabindex="1" class="validate[required,custom[email]" />		
				</div>
				
				<div class="field">
					<label for="password">Password <small><a href="javascript:;">Forgot Password?</a></small></label>
					<input type="password" name="password" value="" id="password" tabindex="2" class="validate[required]" />			
				</div>
			</div> <!-- .login_fields -->
			
			<div class="login_actions">
				<button type="submit" class="btn btn-primary" tabindex="3" name="submit">Login</button>
			</div>
		</form>
	</div> <!-- #login_panel -->		
</div> <!-- #login -->

<script src="javascripts/all.js"></script>


</body>
</html>