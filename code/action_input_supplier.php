<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

$spid = $_POST['ID_Supplier'];
$spname = $_POST['namaSupplier'];
$spaddress = $_POST['alamatSupplier'];
$spphone = $_POST['telpSupplier'];
$spemail = $_POST['emailSupplier'];
$spcity = $_POST['kotaSupplier'];

$query="INSERT INTO mssupplier VALUES ('$spid', '$spname', '$spaddress', '$spphone', '$spemail', '$spcity') " ;

if ( isset( $_POST['submit'] ) ){	
	$hasil=mysql_query($query);
	if ($hasil){
		echo'
		<script>
		alert("Data successfully stored");
		window.location ="data_supplier.php";
		</script>';
		
	} else { 
		echo'
		<script>
		alert("Data failed stored");
		window.location ="data_supplier.php";
		</script>';
	}
}else{
	echo'
		<script>
		window.location ="data_supplier.php";
		</script>';
}	
?>
