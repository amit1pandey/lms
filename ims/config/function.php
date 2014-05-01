<?php
function getState($x){
	$recstate=mysql_query("select * from states where id='".$x."'");
	$rowstate=mysql_fetch_array($recstate);
	return $rowstate['statename'];
	}
	
function getCountry($x){
	$reccountry=mysql_query("select * from country where id='".$x."'");
	$rowcountry=mysql_fetch_array($reccountry);
	return $rowcountry['countryname'];
	}
?>