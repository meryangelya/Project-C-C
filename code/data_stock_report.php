<?php
	error_reporting(0);
	include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Stock Report</title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    </head>

    <body id="body">
    	<div align='center'>           
            <div id="box1">
            	<br>
           	  	<div class="container1" align="left">
                	<button type="submit" class="button2" onClick="window.location='view_stock.php'"><span>Back</span></button>
                    <button type="submit" class="button2" onClick="window.location='home.php'"><span>Home</span></button>
              	</div>  
              	
                <div align="center"><img src="logo.png" style="width:100px;height:100px;" /> 
                <br><font color="#000000" style="font-size:36px" face="Century Gothic">UPDATE STOCK REPORT</font>
                </div>
             	
                <br>
                  <div id="table-scroll" align="center">   
                  <table>
                      <tr>
                        <th>ID TRANS STOCK</th>
                        <th>ID SUPPLIER</th>
                        <th>ID STAFF</th>
                        <th>NAMA BARANG</th>
                        <th>TGL UPDATE</th>
						<th>QUANTITY</th>
                      </tr>
                      
                      <?php  
						$queri="SELECT * FROM trstock" ;						
						$hasil=MySQL_query ($queri);
						$i = 1;
						
						while ($data = mysql_fetch_array ($hasil)){
						if($data['ID_Brg']=="ST001"){
							$jenis ="Pewangi";
						}else if($data['ID_Brg']=="ST002"){
							$jenis = "Deterjen";
						}
						else if($data['ID_Brg']=="ST003"){
							$jenis = "Pelicin";
						}
                      
						echo "  
						<tr>
						<td><center>".$data['ID_TransStock']."</center></td>
						<td>".$data['ID_Supplier']."</td>						
						<td>".$data['ID_Staff']."</td>
						<td>".$jenis."</td>	
						<td>".$data['TglTransStock']."</td>
						<td>".$data['orderQty']."</td>
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