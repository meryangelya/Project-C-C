<?php ob_start();
include "koneksi.php";
$sid = $_POST['ID_Staff'];
$sname = $_POST['namaStaff'];
$saddress = $_POST['alamatStaff'];
$sphone = $_POST['telpStaff'];
$sposition = $_POST['positionStaff'];
$sgaji = $_POST['gajiStaff'];

	$edit="update msstaff set ID_Staff='$sid', namaStaff='$sname', alamatStaff='$saddress', 
		telpStaff='$sphone', positionStaff='$sposition', gajiStaff='$sgaji' where ID_Staff='$sid'";
	
if ( isset( $_POST['submit'] ) ){
	if(mysql_query($edit)){
		mysql_query($edit);
		echo'
		<script>
		alert("Data successfully updated");
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