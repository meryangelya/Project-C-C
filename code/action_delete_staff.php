 <?php
include'koneksi.php';
	$id=$_GET['code'];       
	$delete="Delete from msstaff where ID_Staff='$id'";  
		  
	mysql_query($delete);
	echo'
	<script>
	alert("Data successfully deleted");
	window.location ="data_staff.php";
	</script>';     
?>  

