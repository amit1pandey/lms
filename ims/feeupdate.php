<?php            

               $con=mysql_connect("localhost", "root", "");
               mysql_select_db("ims", $con);
 
                if(isset($_POST['ID']))
				{
				$id=$_POST['ID']; 
				$ins1=$_POST['IN'];
				
			    $query= "select * from feeplan where regid='".$id."'";
				$result = mysql_query($query) or trigger_error(mysql_error().$query);
				 
                $row2=mysql_fetch_array($result);
				$a=$row2['total'];
				$b=$row2['installments'];
				$ins=$row2['ins'];
				$pp=$row2['P_ins'];
				$dte=date('d-M-Y');
				$dte1=$row2['p_date'];
				$dte3=$dte.",".$dte1;
				$date = $row2['date'];
                $ss = strtotime($date);
                $dd=$ins1.",".$pp;
				if($ins==12)
				{
				$c=$a-$b;
				$tc=$c/11;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='11',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
			   if($ins==11)
				{
				$c=$a-$b;
				$tc=$c/10;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='10',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
			   if($ins==10)
				{
				$c=$a-$b;
				$tc=$c/9;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='9',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
				
				if($ins==9)
				{
				$c=$a-$b;
				$tc=$c/8;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='8',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
					
		       if($ins==8)
				{
				$c=$a-$b;
				$tc=$c/7;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='7',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
				
		       if($ins==7)
				{
				$c=$a-$b;
				$tc=$c/6;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='6',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
				
			    if($ins==5)
				{
				$c=$a-$b;
				$tc=$c/4;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='4',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
				
				if($ins==4)
				{
				$c=$a-$b;
				$tc=$c/3;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='3',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
				if($ins==3)
				{
				$c=$a-$b;
				$tc=$c/2; 
				$dt = strtotime("+1 months", $ss);
				$dt1=date("Y-m-d", $dt);
				mysql_query("update feeplan set installments='$tc',total='$c',ins='2',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3' where regid='$id' ");
				}
			    if($ins==2)
				{
				$c=$a-$b;
				$tc=$c/1;
				$dt = strtotime("+1 months", $ss);
				$dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='1',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3' where regid='$id' ");
				}
			    if($ins==1)
				{
					$rr=1;
				mysql_query("update feeplan set installments='$rr',total='',ins='',date='$date',chk=chk+1,P_ins='$dd',p_date='$dte3' where regid='$id'");
				}
				}
				?>