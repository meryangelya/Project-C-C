<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include "koneksi.php";
include "valid.php";
session_start();
$sid = $_SESSION['ids'];
$spid = $_SESSION['idsp'];
/*
if (isset($_POST['ids'])){
    $ids = $_POST['ids'];
}
*/
$query1 = mysql_query("SELECT namaStaff FROM msstaff WHERE ID_Staff LIKE '$sid'");
$query2 = mysql_query("SELECT namaSupplier FROM mssupplier WHERE ID_Supplier ='$spid'");

?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Stock Update Form</title>
        <link rel="stylesheet" type="text/css" href="design3.css">
    </head>
	<?php 
		$carikode = mysql_query("select max(ID_TransStock) from trstock") or die (mysql_error());
		$datakode = mysql_fetch_array($carikode);
		if ($datakode) {
			$nilaikode = substr($datakode[0], 3);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$hasilkode = "TRS".str_pad($kode, 3, "0", STR_PAD_LEFT);
		} else {
			$hasilkode = "gagal";
		}     
	?>
	<body id="body">
        <div align='center'>
              <div id="box">
				<br> <img src="logo.png" style="width:200px;height:200px;">
				<br> <font color="#000000" style="font-size:30px" face="Century Gothic">Stock Update Form</font>
				<div class="container" align="center">
                
                  <form method='POST' action = 'action_input_trstock.php'>
                  <table width="550">
					<tbody>
						<tr>
							<td><div class="font1">Stock Transaction ID</td></div>
							<td><input type="text" name='ID_TransStock' placeholder="Stock Transaction ID" required="required" class="input-txt" value='<?php echo $hasilkode; ?>' readonly/></td>
						</tr>
						<?php
							while($row=mysql_fetch_array($query1)){
						?>
						<tr>
							<td><div class="font1">Staff ID</div></td>
							<td><input type="text" name='staff_id' id='ids' placeholder="Staff ID" required="required" class="input-txt" value="<?php echo $sid; ?>" readonly/></td>
						</tr>
						<tr>
							<td><div class="font1">Staff Name</div></td>
							<td><input type="text" name='staff_name' placeholder="Staff Name" required="required" class="input-txt" value="<?php echo $row['namaStaff']; ?>" readonly/></td>
						</tr>
						<?php 
							} while($row=mysql_fetch_array($query2)){
						?>
						<tr>
							<td><div class="font1">Supplier ID</div></td>
							<td><input type="text" name='id_sup' placeholder="Supplier ID" required="required" class="input-txt" value="<?php echo $spid; ?>" readonly/></td>
						</tr>
						<tr>
							<td><div class="font1">Supplier Name</div></td>
							<td><input type="text" name='sup_name' placeholder="Supplier Name" required="required" class="input-txt" value="<?php echo $row['namaSupplier']; ?>" readonly/></td>
						</tr>
							<?php } ?>
						<tr>
							<td><div class="font1">Date of Stock Update</td></div>
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
						</tr>
						<tr>
							<td><div class="font1">Item List Name</div></td>
							<td><select name="namaBrg">
									<option selected value="Pewangi">Pewangi</option>
									<option value="Deterjen">Deterjen</option>
									<option value="Pelicin">Pelicin</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><div class="font1">Quantity</div></td>
							<td><input type="number" name='qtyBrg' placeholder="Quantity" required="required" class="input-txt"></td>
						</tr>
					</tbody>
				</table>
				<br>
				<div align="center">
					<div class="button-container">
						<button type="submit" name="submit" class="button"><span>Submit</span></button>
                        </form>
						<button type="submit" class="button1" onClick="window.location='stock.php'"><span>Cancel</span></button> 
                    </div>
				</div>
				
				</div>        
       		</div>
        </div>
	</body>
</html>