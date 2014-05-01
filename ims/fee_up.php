<?php            

               $con=mysql_connect("localhost", "root", "");
               mysql_select_db("morphtec_ims", $con);
 
                if(isset($_POST['ID']))
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
				//$dte=date('d-M-Y');
				$dte1=$row2['p_date'];
				$dte3=$dte.",".$dte1;
				$date = $row2['date'];
                $ss = strtotime($date);
                $dd=$ins1.",".$pp;
				if($ins==$ins)
				{
				$c=$a-$ins1;
				$tc=$c/$in;
				$dt = strtotime("+1 months", $ss);
	            $dt1=date("Y-m-d", $dt); 
				mysql_query("update feeplan set installments='$tc',total='$c',ins='$in',date='$dt1',chk=chk+1,P_ins='$dd',p_date='$dte3'  where regid='$id' ");
				}
			   /* if($ins==1)
				{
					$rr=1;
				mysql_query("update feeplan set installments='$rr',total='',ins='',date='$date',chk=chk+1,P_ins='$dd',p_date='$dte3' where regid='$id'");
				}*/
				}
				?>