<?php
include("dbconnect.php");
session_start();
if(!isset($_SESSION['adminId']) || !isset($_SESSION['adminRole']) || !isset($_SESSION['adminEmail']) || !isset($_SESSION['adminStatus']) || $_SESSION['adminStatus']<>"1")
{
	header("location:index.php");
	}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Canvas Admin - Dashboard</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../images/Favi.gif" />	
	<link rel="stylesheet" href="stylesheets/all.css" type="text/css" />
	
	<!--[if gte IE 9]>
	<link rel="stylesheet" href="stylesheets/ie9.css" type="text/css" />
	<![endif]-->
	
	<!--[if gte IE 8]>
	<link rel="stylesheet" href="stylesheets/ie8.css" type="text/css" />
	<![endif]-->
	
</head>
