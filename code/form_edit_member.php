<?php 
include "koneksi.php";
include "valid.php";
$id=$_GET['code'];
$query=mysql_query("select * from msmember where ID_Member='$id'");
?>

<html>
    <head>
    	<title>Form Edit Member</title>
        <link rel="stylesheet" type="text/css" href="design.css">
    <head>
    
    <body id="body">
			<div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:200px;height:200px;">
				<br> <font face="Century Gothic" color="#000000" size="6">EDIT MEMBER</font>
				<div class="container" align="center">
            
           		<form method='POST' action='action_edit_member.php'>
        
                <table width="550">
                <?php
                while($row=mysql_fetch_array($query)){
                ?>
                
                <tbody>
                <tr>
                  	<td><div class="font1">Member ID</td>
                  	<td><input type="text" name='ID_Member' placeholder="Member ID" required class="input-txt" 
                    	value="<?php echo $row['ID_Member'];?>"readonly/></td>
                </tr>

               	<tr>
                  	<td><div class="font1">Full Name</td>    
                  	<td><input type="text" name='namaMember' placeholder="Full Name" required class="input-txt" 
                    	value="<?php echo $row['namaMember'];?>"/></td>
                </tr>
                
                <tr>
                  	<td><div class="font1">Address</td> 
                  	<td><textarea name = 'alamatMember' placeholder='Address' 
                    	required class="input-txt"><?php echo $row['alamatMember'];?></textarea></td>
                </tr>
                
                <tr>
                  <td><div class="font1">Phone Number</td>
                  <td><input type="text" name='telpMember' placeholder="Phone Number" required class="input-txt" 
                  	onkeypress="return isNumber(event)" maxlength="12" value="<?php echo $row['telpMember'];?>"/></td>
                </tr>
   
				<?php } ?>
                </tbody>
                </table>
					
                    <br><div align="center">
                    <div class="button-container">
                    <button type="submit" name="submit"value="Submit"><span>Submit</span></button>
                    </form> 
                    <button type="reset" value="Reset"><span>Reset</span></button>
                   	<button type="submit" class="button1" onClick="window.location='data_member.php'"><span>Cancel</span></button>
                    </div>
                    </div> 
                    
        		</div>        
       		</div>
        </div>
	</body>
</html>