<?php 
include "koneksi.php";
include "valid.php";
$id=$_GET['code'];
$query=mysql_query("select * from msstock where ID_Brg='$id'");
?>

<html>
    <head>
    	<title>Form Edit Stock</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    <head>
    
    <body id="body">
			<div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:250px;height:250px;">
				<br> <font face="Century Gothic" color="#000000" size="6">EDIT STOCK</font>
				<div class="container" align="center">
            
           		<form method='POST' action='action_edit_stock.php'>
        
                <table width="550">
                <?php
                while($row=mysql_fetch_array($query)){
                ?>
                
                <tbody>
                <tr>
                  	<td><div class="font1">Stock ID</td>
                  	<td><input type="text" name='ID_Brg' placeholder="Stock ID" required class="input-txt" 
                    	value="<?php echo $row['ID_Brg'];?>"readonly/></td>
                </tr>

               	<tr>
                  	<td><div class="font1">Stock Name</td>    
                  	<td><input type="text" name='namaBrg' placeholder="Stock Name" required class="input-txt" 
                    	value="<?php echo $row['namaBrg'];?>"/></td>
                </tr>
                
                 	<tr>
                  	<td><div class="font1">Price</td>    
                  	<td><input type="text" name='hargaBrg' placeholder="Price" required class="input-txt" 
                    	onkeypress="return isNumber(event)" value="<?php echo $row['hargaBrg'];?>"/></td>
                </tr>
                
                <tr>
                  <td><div class="font1">Qty</td>
                  <td><input type="text" name='qtyBrg' placeholder="Qty" required class="input-txt" 
                  	onkeypress="return isNumber(event)" maxlength="12" value="<?php echo $row['qtyBrg'];?>"/></td>
                </tr>
   
				<?php } ?>
                </tbody>
                </table>
                
					
                    <br><div align="center">
                    <div class="button-container">
                    <button type="submit" name="submit" value="Submit"><span>Submit</span></button>
                    </form>
                    <button type="reset" value="Reset"><span>Reset</span></button>
                   	<button type="submit" class="button1" onClick="window.location='data_stock.php'"><span>Cancel</span></button>
                    </div>
                    </div> 
                    
        		</div>        
       		</div>
        </div>
	</body>
</html>