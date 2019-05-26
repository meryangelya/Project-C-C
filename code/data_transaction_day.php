<?php
	error_reporting(0);
	include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Transaction Data Today</title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    </head>

    <body id="body">
    	<div align='center'>           
            <div id="box1">
            	<br>
           	  	<div class="container1" align="left">
                	<button type="submit" class="button2" onClick="window.location='view_transaction.php'"><span>Back</span></button>
                    <button type="submit" class="button2" onClick="window.location='home.php'"><span>Home</span></button>
              	</div>  
              	
                <div align="center"><img src="logo.png" style="width:100px;height:100px;" /> 
                <br><font color="#000000" style="font-size:36px" face="Century Gothic">Transaction Data Today</font>
                </div>
             	
                <br>
                  <div id="table-scroll" align="center">   
                  <table>
                      <tr>
                        <th>ID TRANS</th>
                        <th>ID MEMBER</th>
                        <th>ID STAFF</th>
                        <th>ID SERVICE TYPE</th>
						<th>TGL TERIMA</th>
						<th>TGL AMBIL</th>
						<th>TOTAL ITEM</th>
                        <th>TOTAL KILO</th>
                        <th>TOTAL PRICE</th>
                        <th>NOTES</th>
                      </tr>
                      
                      <?php  
						$queri="SELECT * FROM trlaundry WHERE YEAR(TglTerima) = YEAR(NOW()) AND MONTH(TglTerima) = MONTH(NOW()) AND DAY(TglTerima) = DAY(NOW())" ;						
						$hasil=MySQL_query ($queri);
						$i = 1;
                      
						while ($data = mysql_fetch_array ($hasil)){
							if($data['ID_ServiceType']=="STP01"){
								$jenis ="Regular";
							}else{
								$jenis = "Express";
							}
						
						echo "  
						<tr>
						<td><center>".$data['ID_TransLaundry']."</center></td> 
						<td>".$data['ID_Member']."</td>
						<td>".$data['ID_Staff']."</td>
						<td>".$jenis."</td>	
						<td>".$data['TglTerima']."</td>
						<td>".$data['TglAmbil']."</td>
						<td>".$data['totalItem']."</td>
						<td>".$data['totalKilo']."</td>	
						<td>".$data['totalPrice']."</td>
						<td>".$data['trNotes']."</td>	
						</tr> 
						";
						$i++; 
						}		
					  ?>
                    </table>
                    </div>
              </div>
        </div>
    </body>
</html>