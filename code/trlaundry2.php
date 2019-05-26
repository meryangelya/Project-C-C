<?php
include "koneksi.php";
include "valid.php";
session_start();
$sidm = $_SESSION['idm'];
$sids = $_SESSION['ids'];
/*
if (isset($_POST['idm'])){
    $id = $_POST['idm'];
}
if (isset($_POST['ids'])){
    $ids = $_POST['ids'];
}
*/
$query = mysql_query("SELECT namaMember, telpMember FROM msmember WHERE ID_Member LIKE '$sidm'");
$query1 = mysql_query("SELECT namaStaff FROM msstaff WHERE ID_Staff LIKE '$sids'");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     	<title>Laundry C&C - Transaction Form</title> 
        <link rel="stylesheet" type="text/css" href="design2.css">
	</head>

	<body id="body">
        <div align='center'>           
            <div id="box">
              	<br><img src="logo.png" style="position:absolute;width:200px;height:200px; padding-left:55px">
				<br><br><br><div class="container">
					<div>
						<form method='POST' action ='action_input_trlaundry.php'>
						<table width="320">
                        
                        <?php 
						  $carikode = mysql_query("select max(ID_TransLaundry) from trlaundry") or die (mysql_error());
						  $datakode = mysql_fetch_array($carikode);
						  if ($datakode) {
						   $nilaikode = substr($datakode[0], 2);
						   $kode = (int) $nilaikode;
						   $kode = $kode + 1;
						   $hasilkode = "TR".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } else {
						   $hasilkode = "gagal";
						  }
						 
               			 while($row=mysql_fetch_array($query)){
                
					   ?>
                        
							<tr>
								<td><div class="font1">Member ID</div></td>
								<td><input type="text" name='ID_Member' placeholder="Member ID"
                                class="input-txt" value="<?php echo $sidm; ?>"readonly/>
								</td>
							</tr>
							<tr>
								<td><div class="font1">Member Name</div></td>    
								<td><input type="text" name='namaMember' placeholder="Full Name" 
                                class="input-txt" value="<?php echo $row['namaMember'];?>" readonly/></td>
							</tr>
							<tr>
								<td><div class="font1">Member Phone Number</div>  </td> 
								<td><input type="text" name='telpMember' placeholder="Phone Number" class="input-txt" 
                                onkeypress="return isNumber(event)" value="<?php echo $row['telpMember'];?>" readonly/></td>
							</tr>
                            <?php } ?>
						</table>
							<br><br><br>
						
                        <table width="300">
                        	<?php
								while($row=mysql_fetch_array($query1)){
							?>
							<tr>
								<td><div class="font1">Staff ID</div></td>
								<td><input type="text" name='ID_Staff' placeholder="Staff ID"
                                class="input-txt" value="<?php echo $sids; ?>"readonly>
								</td>
							</tr>
							<tr>
								<td><div class="font1">Staff Name</div></td>
								<td><input type="text" name='namaStaff' placeholder="Staff Name"
                                class="input-txt" value="<?php echo $row['namaStaff']; ?>"readonly /></td>
							</tr>
                            <?php } ?>
						</table>
                        <br>
                        <font class="font1" style="">Notes</font>
                        <br>
                        <textarea name = 'notes' placeholder='Notes' required class="input-txt"></textarea> 
					</div>
                    
				</div>
                       
                <div class="container1">
						<br>
						<table width="750">
							<tr>
								<td><div class="font1">Transaction ID</td></div>
								<td><input type="text" name='ID_TransLaundry' placeholder="Transaction ID" 
                                required="required" class="input-txt" value='<?php echo $hasilkode; ?>' readonly/>
								</td>
							</tr>
							<tr>
								<td><div class="font1">Date of Entry</td></div>
								<td>
									<select name="day_entry">
                                        <option selected value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
                                    </select>
									<select name="month_entry">
										<option selected value="January">January</option>
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
										<option value="July">July</option>
										<option value="August">August</option>
										<option value="September">September</option>
										<option value="October">October</option>
										<option value="November">November</option>
										<option value="December">December</option>
        							</select>
									<select name="year_entry">
										<option selected value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
                                        <option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
                                        <option value="2025">2025</option>
									</select>
								</td>
								<td><div class="font1">Date Taken</div>
									<td><select name="day_taken">
										<option selected value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									<select name="month_taken">
										<option selected value="January">January</option>
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
										<option value="July">July</option>
										<option value="August">August</option>
										<option value="September">September</option>
										<option value="October">October</option>
										<option value="November">November</option>
										<option value="December">December</option>
        							</select>
									<select name="year_taken">
										<option selected value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
                                        <option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
                                        <option value="2025">2025</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><div class="font1">Service Type</div></td>
								<td>
									<input type="radio" value="Regular" name="radio" checked><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Regular</label>
									<input type="radio" value="Express" name="radio"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Express</label>
								</td>
							</tr>
                           
						</table>
						
                        <br>
						<center>
						<div class="font2">ITEM TYPE</div><br>
						<table width="550" >
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P001"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kemeja Panjang</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P002"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kerudung</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P003"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kemeja Pendek</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P004"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Sajadah</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P005"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Jaket</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P006"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Handuk</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P007"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kaos Oblong</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P008"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Bed Cover</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P009"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kaos Kerah</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P010"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Sarung Bantal</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P011"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Celana Panjang</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P012"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Sarung Guling</label>
								</td>
							</tr>
                            <tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P013"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Celana Pendek</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P014"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kain Sarung</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P015"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Celana Jeans</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P016"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Selimut</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P017"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Rok Panjang</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P018"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Sapu Tangan</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P019"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Rok Pendek</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P020"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Kebaya</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P021"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Singlet</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P022"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Gaun</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P023"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Daster</label>
								</td>
								<td>
									<input type="checkbox" name="ID_Pakaian[]" value="P024"><label 
                                    style="font-family:'Century Gothic';font-size: 18px;">Jas</label>
								</td>
							</tr>
						</table>
						
                        <br>
						<table width="700">
							<tr>
								<td>
									<div class="font1">Total Item</div>
								</td>
								<td>
									<input type="text" name='totalItem' placeholder="Total Item" class="input-txt"
                                    onkeypress="return isNumber(event)" >
								</td>
                                <td>
									<div class="font1">Total Kilo</div>
								</td>
								<td>
									<input type="text" name='totalKilo' placeholder="Total Kilo" class="input-txt"
                                    onkeypress="return isNumber(event)" >
								</td>
								<td>
									<div class="font1">Total Price</div>
								</td>
								<td>
									<input type="text" name='totalPrice' placeholder="Total Price" class="input-txt"
                                    onkeypress="return isNumber(event)" >
								</td>
                                
							</tr>
						</table>
                        <br>
						<button type="submit" name="confirm" class="button" ><span>Confirm</span></button> 
						</form>
                        <button type="submit" class="button1" onClick="window.location='trlaundry1.php'"><span>Cancel</span></button>
						</center>
					
        		</div>
			</div>
		</div>
	</body>
</html>