<?php ob_start();
include "koneksi.php";
$spid = $_POST['ID_Supplier'];
$spname = $_POST['namaSupplier'];
$spaddress = $_POST['alamatSupplier'];
$spphone = $_POST['telpSupplier'];
$spemail = $_POST['emailSupplier'];
$spcity = $_POST['kotaSupplier'];

	$edit="update mssupplier set ID_Supplier='$spid', namaSupplier='$spname', 
		alamatSupplier='$spaddress', telpSupplier='$spphone', emailSupplier='$spemail', kotaSupplier='$spcity' 
		where ID_Supplier='$spid'";
	
if ( isset( $_POST['submit'] ) ){
	if(mysql_query($edit)){
		mysql_query($edit);
		echo'
			<script>
			alert("Data successfully updated");
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