<?php 
include "koneksi.php";
include "valid.php";
$id=$_GET['code'];
$query=mysql_query("select * from msstaff where ID_Staff='$id'");
?>

<html>
    <head>
        <title>Form Edit Staff</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

	<body id="body">
        <div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:150px;height:150px;">
				<br> <font face="Century Gothic" color="#000000" size="5">STAFF REGISTRATION</font>
				<div class="container" align="center">
                
                  <form method='POST' action = 'action_edit_staff.php'>
                  <table width="550">
                  
                  <?php
                  while($row=mysql_fetch_array($query)){
                  ?>
                  
              	  <tbody>
  
                  <tr>
                  	<td><div class="font1">Staff ID</td>
                  	<td><input type="text" name='ID_Staff' placeholder="Staff ID" required class="input-txt" 
                    	value="<?php echo $row['ID_Staff'];?>" readonly/></td>
                  </tr>
                  
                  <tr>
                  	<td><div class="font1">Full Name</td>    
                  	<td><input type="text" name='namaStaff' placeholder="Full Name" required class="input-txt" 
                    	value="<?php echo $row['namaStaff'];?>"/></td>
                  </tr>
                  
                  <tr>
                  	<td><div class="font1">Address</td> 
                  	<td><textarea name = 'alamatStaff' placeholder='Address' required 
                    class="input-txt"><?php echo $row['alamatStaff'];?></textarea> </td>
                  </tr>
                  
                  <tr>
                  <td><div class="font1">Phone Number</td>
                  <td><input type="text" name='telpStaff' placeholder="Phone Number" required class="input-txt" 
                  	onkeypress="return isNumber(event)" maxlength="12" value="<?php echo $row['telpStaff'];?>"/></td>
                  </tr>
                  
                  <tr>
                  <td><div class="font1">Position</td>
                  <td><input type="text" name='positionStaff' placeholder="Position" required class="input-txt"
                  	value="<?php echo $row['positionStaff'];?>" /></td>
                  </tr>
               	  
                  <tr>
                  <td><div class="font1">Wage</td>
                  <td><input type="text" name='gajiStaff' placeholder="Wage" required class="input-txt" 
                  onkeypress="return isNumber(event)" value="<?php echo $row['gajiStaff'];?>"/></td>
                  </tr>
                  
                  <?php } ?>
                  </tbody>
             	  </table>
                  
                  	<br><div align="center">
                    <div class="button-container">
                    <button type="submit" name="submit" value="Submit"><span>Submit</span></button>
                    </form>
                    <button type="reset" value="Reset"><span>Reset</span></button>
                   	<button type="submit" class="button1" onClick="window.location='home.php'"><span>Cancel</span></button>
                    </div>
                    </div> 
                  
        		</div>        
       		</div>
        </div>
	</body>
</html>