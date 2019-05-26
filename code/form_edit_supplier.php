<?php 
include "koneksi.php";
include "valid.php";
$id=$_GET['code'];
$query=mysql_query("select * from mssupplier where ID_Supplier='$id'");
?>

<html>
    <head>
    	<title>Form Edit Supplier</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    <head>
    
    <body id="body">
			<div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:150px;height:150px;">
				<br> <font face="Century Gothic" color="#000000" size="6">EDIT SUPPLIER</font>
				<div class="container" align="center">
            
           		<form method='POST' action='action_edit_supplier.php'>
        
                <table width="550">
                <?php
                while($row=mysql_fetch_array($query)){
                ?>
                
                <tbody>
                <tr>
                  	<td><div class="font1">Supplier ID</td>
                  	<td><input type="text" name='ID_Supplier' placeholder="Supplier ID" required class="input-txt" 
                    	value="<?php echo $row['ID_Supplier'];?>"readonly/></td>
                </tr>

               	<tr>
                  	<td><div class="font1">Full Name</td>    
                  	<td><input type="text" name='namaSupplier' placeholder="Full Name" required class="input-txt" 
                    	value="<?php echo $row['namaSupplier'];?>"/></td>
                </tr>
                
                <tr>
                  	<td><div class="font1">Address</td> 
                  	<td><textarea name = 'alamatSupplier' placeholder='Address' 
                    	required class="input-txt"><?php echo $row['alamatSupplier'];?></textarea></td>
                </tr>
                
                <tr>
                  <td><div class="font1">Phone Number</td>
                  <td><input type="text" name='telpSupplier' placeholder="Phone Number" required class="input-txt" 
                  	onkeypress="return isNumber(event)" maxlength="12" value="<?php echo $row['telpSupplier'];?>"/></td>
                </tr>
                
                <tr>
                  <td><div class="font1">Email</td>
                  <td><input type="text" name='emailSupplier' placeholder="Email" required class="input-txt" 
                  		value="<?php echo $row['emailSupplier'];?>"/></td>
                </tr>
                
                <tr>
                  <td><div class="font1">City</td>
                  <td><input type="text" name='kotaSupplier' placeholder="City" required class="input-txt" 
                  		value="<?php echo $row['kotaSupplier'];?>"/></td>
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