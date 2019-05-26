<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include "koneksi.php";
include "valid.php";
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Register Staff</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    </head>

	<body id="body">
        <div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:150px;height:150px;">
				<br> <font face="Century Gothic" color="#000000" size="5">STAFF REGISTRATION</font>
				<div class="container" align="center">
                
                  <form method='POST' action = 'action_input_staff.php'>
                  <table width="550">
                  
                  <?php 
					  $carikode = mysql_query("select max(ID_Staff) from msstaff") or die (mysql_error());
					  $datakode = mysql_fetch_array($carikode);
					  if ($datakode) {
					   $nilaikode = substr($datakode[0], 1);
					   $kode = (int) $nilaikode;
					   $kode = $kode + 1;
					   $hasilkode = "S".str_pad($kode, 3, "0", STR_PAD_LEFT);
					  } else {
					   $hasilkode = "gagal";
					  }
				   ?>
                  
              	  <tbody>
  
                  <tr>
                  	<td><div class="font1">Staff ID</td>
                  	<td><input type="text" name='ID_Staff' placeholder="Staff ID" required="required" class="input-txt" 
                    	value='<?php echo $hasilkode; ?>' readonly/></td>
                  </tr>
                  
                  <tr>
                  	<td><div class="font1">Full Name</td>    
                  	<td><input type="text" name='namaStaff' placeholder="Full Name" required="required" class="input-txt"/></td>
                  </tr>
                  
                  <tr>
                  	<td><div class="font1">Address</td> 
                  	<td><textarea name = 'alamatStaff' placeholder='Address' required="required" class="input-txt"></textarea> </td>
                  </tr>
                  
                  <tr>
                  <td><div class="font1">Phone Number</td>
                  <td><input type="text" name='telpStaff' placeholder="Phone Number" required="required" class="input-txt"
                  		onkeypress="return isNumber(event)" maxlength="12"/></td>
                  </tr>
                  
                  <tr>
                  <td><div class="font1">Position</td>
                  <td><input type="text" name='positionStaff' placeholder="Position" required="required" class="input-txt"/></td>
                  </tr>
               	  
                  <tr>
                  <td><div class="font1">Wage</td>
                  <td><input type="text" name='gajiStaff' placeholder="Wage" required="required" class="input-txt"
                  		onkeypress="return isNumber(event)" /></td>
                  </tr>
                  
                  </tbody>
             	  </table>
                  	<br><div align="center">
                    <div class="button-container">
                    <button type="submit" name="submit" value="Submit"><span>Submit</span></button>
                     </form>
                    <button type="reset" value="Reset"><span>Reset</span></button>
                   	<button type="submit" class="button1" onClick="window.location='data_staff.php'"><span>Cancel</span></button>
                    </div>
                    </div> 
                 
        		</div>        
       		</div>
        </div>
	</body>
</html>