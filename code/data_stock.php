<?php
	error_reporting(0);
	include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Stock Data</title>
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
                <br><font color="#000000" style="font-size:36px" face="Century Gothic">STOCK DATA</font>
                </div>
             	
                <br>
                  <div id="table-scroll" align="center">   
                  <table>
                      <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QTY</th>
                        <th>EDIT</th>
                      </tr>
                      
                      <?php  
						$query="Select * From msstock" ;						
						$hasil=mysql_query($query);
						$i = 1;
                      
						while ($data = mysql_fetch_array ($hasil)){
						echo "  
						<tr>
						<td><center>".$data['ID_Brg']."</center></td> 
						<td>".$data['namaBrg']."</td>
						<td>".$data['hargaBrg']."</td>
						<td>".$data['qtyBrg']."</td>
						
						<td><center><a href='form_edit_stock.php?code=$data[ID_Brg]'>Edit</a></center></td>							
						</tr> 
						";
						$i++; 
						}		
					  ?>
                    </table>
                    </div>
               
               <br>
                <div class="button-container" align="center">
                <form action='' method='POST'>
              </div>
            </div>
        </div>
    </body>
</html>