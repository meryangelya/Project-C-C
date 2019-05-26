<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

$sid = $_POST['ID_Staff'];
$sname = $_POST['namaStaff'];
$saddress = $_POST['alamatStaff'];
$sphone = $_POST['telpStaff'];
$sposition = $_POST['positionStaff'];
$sgaji = $_POST['gajiStaff'];

$query="INSERT INTO msstaff VALUES ('$sid', '$sname', '$saddress', '$sphone', '$sposition', '$sgaji') " ;

if ( isset( $_POST['submit'] ) ){	
	$hasil=mysql_query($query);
	if ($hasil){
		echo'
		<script>
		alert("Data successfully stored");
		window.location ="data_staff.php";
		</script>';
		
	} else { 
		echo'
		<script>
		alert("Data failed stored");
		window.location ="data_staff.php";
		</script>';
	}
}else{
	echo'
		<script>
		window.location ="data_staff.php";
		</script>';
}	
?>
