<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Stock Input Staff ID & Supplier ID</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

	<body id="body">
        <div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:350px;height:350px;">
				<br> <font color="#000000" style="font-size:30px" face="Century Gothic">PLEASE INPUT STAFF ID & SUPPLIER ID</font>
                <br><br>
                  <form method='POST' action = ''>
                  <table width="500">
              	  <tbody>
                  <tr>
                	<td><div class="font1">Staff ID</div></td>
                	<td><input type="text" name='ids' id='ids' placeholder="Staff ID" required="required" class="input-txt"></td>
				  </tr>
				  <tr>
                	<td><div class="font1">Supplier ID</div></td>
                	<td><input type="text" name='idsp' id='idsp' placeholder="Supplier ID" required="required" class="input-txt"></td>
				  </tr>
                  </tbody>
             	  </table>
				<button type="submit" name="submit" class="button"><span>Submit</span></button>
				<button type="submit" class="button1" onClick="window.location='view_stock.php'"><span>Cancel</span></button> 
				</form>
                
				   <?php
					session_start();
					include "koneksi.php";
					
					$sid = $_POST['ids'];
					$spid = $_POST['idsp'];
					$_SESSION['ids'] = $sid;
					$_SESSION['idsp'] = $spid;
					
					$query1 = "SELECT ID_Staff FROM msstaff WHERE ID_Staff ='$sid'";
					$query2 = "SELECT ID_Supplier FROM mssupplier WHERE ID_Supplier ='$spid'";
					$query_run1 = mysql_query($query1);
					$query_run2 = mysql_query($query2);
					if ( isset( $_POST['submit'] ) ){
						if (mysql_num_rows($query_run1)!=1 || mysql_num_rows($query_run2)!=1) 
						{
						   echo'
							<script>
							alert("ID Not Found");
							window.location ="stock.php";
							</script>';
						}else { 
							echo'
							<script>
							window.location ="stock1.php";
							</script>'; 
						}
					}
					
					?>  
				  
        		</div>        
       		</div>
        </div>
	</body>
</html>