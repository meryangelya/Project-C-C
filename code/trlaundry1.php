

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     	<title>Laundry C&C</title> 
        <link rel="stylesheet" type="text/css" href="design.css">
	</head>

	<body id="body">
        <div align='center'>           
            <div id="box">
              	<br><img src="logo.png" style="width:350px;height:350px;">
            	<br><font color="#000000" style="font-size:30px" face="Century Gothic">PLEASE INPUT MEMBER ID & STAFF ID</font>
              <br><br>
              <form method='POST' action =''>
                <table width ="500";>
                <tbody>
                <tr>
                    <td><div class="font1">Member ID</div></td>
                  <td><input type="text" name='idm' id='idm' placeholder="Member ID" required="required" 
                        class="input-txt"></td>
                </tr>
                <tr>
                	<td><div class="font1">Staff ID</div></td>
                	<td><input type="text" name='ids' id='ids' placeholder="Staff ID" required="required" 
                	class="input-txt"></td>
                </tr>
                </tbody>  
                </table>  
                <button type="submit" name="submit" class="button"><span>Submit</span></button>
                <button type="submit" class="button1" onClick="window.location='home.php'"><span>Cancel</span></button> 
                </form>
                
                <?php
					session_start();
					include "koneksi.php";
					
					$mid = $_POST['idm'];
					$sid = $_POST['ids'];
					$_SESSION['idm'] = $mid;
					$_SESSION['ids'] = $sid;
					
					$query = "SELECT ID_Member FROM msmember WHERE ID_Member ='$mid'";
					$query1 = "SELECT ID_Staff FROM msstaff WHERE ID_Staff ='$sid'";
					$query_run = mysql_query($query);
					$query_run1 = mysql_query($query1);
					if ( isset( $_POST['submit'] ) ){
						if (mysql_num_rows($query_run)!=1 ||mysql_num_rows($query_run1)!=1 ) 
						{
						   echo'
							<script>
							alert("ID Not Found");
							window.location ="trlaundry1.php";
							</script>';
						}else { 
							echo'
							<script>
							window.location ="trlaundry2.php";
							</script>'; 
						}
					}
					
					?>   
            </div>
        </div>
	</body>
</html>