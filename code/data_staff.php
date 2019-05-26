<?php
	error_reporting(0);
	include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Staff Data</title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    </head>

<body id="body">
    	<div align='center'>           
            <div id="box1">
            	<br>
           	  	<div class="container1" align="left">
                	<button type="submit" class="button2" onClick="window.location='view_data.php'"><span>Back</span></button>
                    <button type="submit" class="button2" onClick="window.location='home.php'"><span>Home</span></button>
              	</div>  
              	<div align="center"><img src="logo.png" style="width:100px;height:100px;" /> 
                <br><font color="#000000" style="font-size:36px" face="Century Gothic">STAFF DATA</font>
                </div>
             	
                <br>
                  <div id="table-scroll" align="center">
                  <table>
                      <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>TELEPHONE</th>
                        <th>POSITION</th>
                        <th>WAGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                      </tr>
                 
                 	 <?php  
						$queri="Select * From msstaff" ;						
						$hasil=mysql_query($queri);
						$i = 1;
                      
						while ($data = mysql_fetch_array ($hasil)){
						echo "  
						<tr>
						<td><center>".$data['ID_Staff']."</center></td> 
						<td>".$data['namaStaff']."</td>
						<td>".$data['alamatStaff']."</td>
						<td>".$data['telpStaff']."</td>
						<td>".$data['positionStaff']."</td>
						<td>".$data['gajiStaff']."</td>
						<td><center><a href='form_edit_staff.php?code=$data[ID_Staff]'>Edit</a></center></td>	
						<td><center><a href='action_delete_staff.php?code=$data[ID_Staff]'
							onclick='return confirm(\"Are you sure want to Delete?\")'>Delete</a></td							  
						</tr> 
						";
						$i++; 
						}		
					  ?>
                    </table>
                    </div>
               
               <br>
                <div class="button-container" align="center">
                <form action='regis_staff.php' method='POST'>
                <button type="submit" name='input' class="button"><span>Input</span></button></form>
              </div>
            </div>
        </div>
    </body>
</html>