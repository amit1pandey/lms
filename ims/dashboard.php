<?php include("header.php");?>
<?php include("navigation.php");?>
<?php
///******************WEEKLY STATUS**********************//
$day = date('Y-m-d');
$lweek = date("Y-m-d",strtotime($day." last Monday "));
$qur=mysql_query("select count(regno) as Rcount from register where status=1 and dateofregistration between '$lweek' and '$day' ");
$row=mysql_fetch_array($qur);


$tfee=mysql_query("select sum(commitedfee)as tfee,sum(total)as tpen from feeplan where dofp between '$lweek' and '$day'");
$tfeer=mysql_fetch_array($tfee);
?>	

<?php
//****************TOTAL STATUS*********************//
$tqur=mysql_query("select count(regno) as Rcount1,dateofregistration from register where status=1 ");
$trow=mysql_fetch_array($tqur);

$tqur1=mysql_query("select count(id) as Ecount from enquiry");
$trow1=mysql_fetch_array($tqur1);

$tfee1=mysql_query("select sum(commitedfee)as tfee,sum(total)as tpen from feeplan where status=1 ");
$tfeer1=mysql_fetch_array($tfee1);

?>
<?php
//************TODAY STATUS*************//					
$tday=mysql_query("select count(regno) as Rcount2,dateofregistration from register where status=1 and dateofregistration='$day'");
$tday1=mysql_fetch_array($tday);

$tday2=mysql_query("select count(id) as Ecount2 from enquiry where dateofenquiry='$day'");
$trow2=mysql_fetch_array($tday2);

$tfee3=mysql_query("select sum(commitedfee)as tfee1,sum(total)as tpen1 from feeplan where status=1 and dofp='$day' ");
$tfeer3=mysql_fetch_array($tfee3);

?>
	<div id="content">		
		
		<div id="contentHeader">
			<h1>Dashboard</h1>
		</div> <!-- #contentHeader -->	
		
		<div class="container">
			
			
			<div class="grid-17">
				
				<div class="widget widget-plain">
					
					
					<br>
					<div class="widget-content">
				
						<h2 class="dashboard_title">
							Today Sales Stats
							<span><?php echo date("d-M-Y",strtotime($day)); ?></span>
						</h2>				
						
						<div class="dashboard_report first activeState">
							<div class="pad">
								<span class="value"><?php echo $tday1['Rcount2']; ?></span>Registrations
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState">
							<div class="pad">
								<span class="value"><?php echo $trow2['Ecount2'];  ?></span> Enquiry
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState">
							<div class="pad">
							<?php $a=$tfeer3['tfee1'] ; 
							          $b=$tfeer3['tpen1'];
								   $get_ins=$a-$b; 							
							
							?> 
								<span class="value"><?php echo $get_ins; //$tfeer3['tfee1']; ?></span> Collected Amount
							</div> <!-- .pad -->
						</div>
						
						<div class="dashboard_report defaultState last">
							<div class="pad">
								<span class="value"><?php echo $tfeer3['tpen1']; ?></span> Pending Amount
							</div> <!-- .pad -->
						</div>
						
					</div> <!-- .widget-content -->

					
				</div> <!-- .widget -->
				

				
				
				
				<div class="widget widget-tabs">
					
					<div class="widget-header">
						<span class="icon-chart"></span>
						<h3 class="">Charts</h3>	
						
						<ul class="tabs right">	
							<li class="active"><a href="#yearly">Yearly</a></li>	
							<li class=""><a href="#monthly">Monthly</a></li>					
							<li class=""><a href="#weekly">Weekly</a></li>
						</ul>					
					</div>
				<?php	
				$from_date = date('Y');
                $to_date = date('Y-m-d');
				$result = mysql_query("SELECT DISTINCT month(dateofregistration)as mm FROM register WHERE year(dateofregistration) >= '".$from_date."' AND dateofregistration <= '".$to_date."' Group by dateofregistration"); ?>
					<div id="yearly" class="widget-content">
						<table class="stats" data-chart-type="line" data-chart-colors="">
							<!--<caption>2009/2010 Sales by industry (Million)</caption>-->
							<thead>
								     <tr>
								<?php		
							while($row1=mysql_fetch_array($result))
							{
							 echo "<th>".$row1['mm']."</th>";
						     //	echo "<th>".date('M', strtotime($row1['dateofregistration']))."</th>";
							}
								?>
									</tr>	
								</thead> <?php 
								
$result1 = mysql_query("SELECT MONTH(dateofregistration) as month_val ,COUNT(*) as total FROM register WHERE year(dateofregistration) >= '".$from_date."' AND dateofregistration <= '".$to_date."' Group by MONTH(dateofregistration)"); ?>								
								<tbody>
									<tr>
										<th><?php echo date('Y');?></th>
										<?php		
							    	    while($row2=mysql_fetch_array($result1))
								        {
									      echo "<td>".$row2['total']."</td>";
								        }
								?>
									</tr>														
								</tbody>
						</table>
					</div> <!-- .widget-content -->
					
					<div id="monthly" class="widget-content">
						
						<h3>Monthly Content</h3>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div> <!-- .widget-content -->
					
					<div id="weekly" class="widget-content">
						
						<h3>Weekly Content</h3>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
					</div> <!-- .widget-content -->
					
				</div> <!-- .widget --><!-- .widget --><!-- .widget -->
				
				
				
				
			</div> <!-- .grid -->			
			
			
			
			<div class="grid-7">
				
				
				
				<div id="gettingStarted" class="box" style="background:#00BFBF;" >
				<!--	<h3>Amount collected</h3>-->

					<!--<p>Completing your bio will bring you to 58%.</p>-->
                   
				<!--	<div class="progress-bar secondary">-->
						<!--<div class="bar" style="width:<?php // echo round($d);?>%;"><?php// echo round($d);?>%</div>-->
					<!--</div>--> 
				<ul class="bullet secondary">
                <h3 class="dashboard_title">
							Total Sales Stats<br />  </h3>
                          Date: <?php echo date("d-M-Y",strtotime($trow['dateofregistration']))." to ".date("d-M-Y",strtotime($day));  ?><br>
                     Registrations:<?php echo $trow['Rcount1']; ?></span> <br />
                     Enquiry: <?php echo $trow1['Ecount']; ?></span><br />	
                     Total Amount: <span class="value"><?php echo $tfeer1['tfee']; ?></span> <br />
                     Pending Amount: <span class="value"><?php echo $tfeer1['tpen']; ?> <br />
                      <br>
                        <h3>Amount collected</h3>
					<!--<p>Completing your bio will bring you to 58%.</p>-->
                    <?php
					 $a=$tfeer1['tfee'];
					  $b= $tfeer1['tpen'];
					 if(!empty($a)){
					 $d=100-$c=$b*100/$a;
					 }
					 else
					 {
						 $d="";
					 }
					   
					 ?> 
					<div class="progress-bar secondary">
						<div class="bar" style="width:<?php echo round($d);?>%;"><?php echo round($d);?>%</div>
					</div>   
						<!--<li><a href="javascript:;">Complete Your Profile</a></li>
						<li><a href="javascript:;">Add Your Photo</a></li>
						<li><a href="javascript:;">Create Reports</a></li>
						<li><a href="javascript:;">Invite Peoople to Join</a></li>-->
					</ul>
				</div>
				<div id="gettingStarted" class="box">
					
				<ul class="bullet secondary">
                <h3 class="dashboard_title">
							Weekly Sales Stats<br />
							
						</h3>	<span>Date: <?php echo date("d-M-Y",strtotime($lweek ))." to ".date("d-M-Y",strtotime($day));  ?></span>
                        <br />
                        Registrations:<span class="value"><?php echo $row['Rcount']; ?></span> <br />
                        Enquiry: <span class="value"><?php $qur1=mysql_query("select count(id) as Ecount from enquiry where dateofenquiry between '$lweek' and '$day'");
$row1=mysql_fetch_array($qur1); echo $row1['Ecount']; ?></span><br />
                        Total Amount: <span class="value"><?php echo $tfeer['tfee']; ?></span> <br />
                        Pending Amount: <span class="value"><?php echo $tfeer['tpen']; ?>  </span><br />
                       <br>
                        <h3>Amount collected</h3>
					<!--<p>Completing your bio will bring you to 58%.</p>-->
                    <?php
					 $a=$tfeer['tfee'];
					  $b= $tfeer['tpen'];
					 if(!empty($a)){
					 $d=100-$c=$b*100/$a;
					 }
					 else
					 {
						 $d="";
					 }
					   
					 ?> 
					<div class="progress-bar secondary">
						<div class="bar" style="width:<?php echo round($d);?>%;"><?php echo round($d);?>%</div>
					</div>

						<!--<li><a href="javascript:;">Complete Your Profile</a></li>
						<li><a href="javascript:;">Add Your Photo</a></li>
						<li><a href="javascript:;">Create Reports</a></li>
						<li><a href="javascript:;">Invite Peoople to Join</a></li>-->
					</ul>
				</div>
				<br><!-- .box -->
				
			</div> <!-- .grid -->
			
		</div> <!-- .container -->
		
	</div> <!-- #content -->

<?php include("footer.php");?>

</body>
</html>