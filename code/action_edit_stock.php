<?php ob_start();
include "koneksi.php";
$stid = $_POST['ID_Brg'];
$stname = $_POST['namaBrg'];
$stprice = $_POST['hargaBrg'];
$stqty = $_POST['qtyBrg'];

	$edit="update msstock set ID_Brg='$stid', namaBrg='$stname', 
		hargaBrg='$stprice', qtyBrg='$stqty' where ID_Brg='$stid'";
	
if ( isset( $_POST['submit'] ) ){
	if(mysql_query($edit)){
		mysql_query($edit);
		echo'
			<script>
			alert("Data successfully updated");
			window.location ="data_stock.php";
			</script>';
		}
}else{
	echo'
		<script>
		window.location ="data_stock.php";
		</script>';
}
?>