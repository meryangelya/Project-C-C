<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

//id
$trid = $_POST['ID_TransStock'];
$sid = $_POST['staff_id'];
$spid = $_POST['id_sup'];


//order
$ord = $_POST['qtyBrg'];

//id barang
if (isset($_POST['submit'])) {
	if(isset($_POST['namaBrg'])) {
		$nmbrg = $_POST['namaBrg'];
		if($nmbrg == "Pewangi"){
			$bid = "ST001";	
		}else if($nmbrg == "Deterjen"){
			$bid = "ST002"; 
		}else if($nmbrg == "Pelicin"){
			$bid = "ST003"; 
		}
	}
}

//date entry
$yeare = $_POST['year_entry'];
$monthe = date('m', strtotime($_POST['month_entry']));
$daye = $_POST['day_entry'];
$newDate = $yeare . '-' . $monthe . '-' . $daye;

date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');
$datetime = $newDate.' '.$time;

 
$query="INSERT INTO `trstock` (`ID_TransStock`, `ID_Supplier`, `ID_Staff`, `ID_Brg`, `TglTransStock`, `orderQty`) VALUES ('$trid', '$spid', '$sid', '$bid', '$datetime', '$ord');";
$query1="UPDATE msstock SET qtyBrg=qtyBrg+'$ord' where ID_Brg='$bid'";

$hasil=mysql_query($query);
$hasil1=mysql_query($query1);

if ( isset( $_POST['submit'] ) ){
	if ($hasil && $hasil1){
		echo'
		<script>
		alert("Data successfully stored");
		window.location ="data_stock_report.php";
		</script>';
		
	} else { 
		echo'
		<script>
		alert("Data failed stored");
		window.location ="stock1.php";
		</script>';
	}
}else{
	echo'
		<script>
		window.location ="stock.php";
		</script>';
}
?>
