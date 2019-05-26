 <?php
include'koneksi.php';
	$id=$_GET['code'];       
	$delete="Delete from mssupplier where ID_Supplier='$id'";  
		  
	mysql_query($delete);
	if(mysql_query($delete)){
	echo'
	<script>
	confirm("Data successfully deleted");
	window.location ="data_supplier.php";
	</script>';
	}
?>  

