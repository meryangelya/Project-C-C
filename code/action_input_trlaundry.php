<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

//id
$trid = $_POST['ID_TransLaundry'];
$mid = $_POST['ID_Member'];
$sid = $_POST['ID_Staff'];
$no = $_POST['notes'];

//radio button
if (isset($_POST['confirm'])) {
	if(isset($_POST['radio'])) {
		$radio = $_POST['radio'];
		if($radio == "Regular"){
			$stpid = "STP01";	
		}else{
			$stpid = "STP02"; 
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

//date taken
$dayt = $_POST['day_taken'];
$montht = $_POST['month_taken'];
$yeart = $_POST['year_taken'];
$datetaken = $montht." ".$dayt.",".$yeart; 

//total
$titem = $_POST['totalItem'];
$tkilo = $_POST['totalKilo'];
$tprice = $_POST['totalPrice'];

$query="INSERT INTO trlaundry VALUES ('$trid', '$mid', '$stpid', '$sid', '$datetime', 
		STR_TO_DATE('$datetaken','%M %d,%Y'), '$titem', '$tkilo', '$tprice','$no')" ;

$hasil=mysql_query($query);

//pakaian
$trid = $_POST['ID_TransLaundry'];
$pakaian = $_POST['ID_Pakaian'];
$jmlhPakaian = count($pakaian);

for($x=0;$x<$jmlhPakaian;$x++){
	mysql_query("INSERT INTO trlaundrydetail values('$trid','$pakaian[$x]')");
}

if ($hasil){
	echo'
	<script>
	alert("Data successfully stored");
	window.location ="home.php";
	</script>';
	
} else { 
	echo'
	<script>
	alert("Data failed stored");
	window.location ="transaction.php";
	</script>';
}

?>
