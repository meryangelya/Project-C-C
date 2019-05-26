 <?php
include'koneksi.php';
	$id=$_GET['code'];       
	$delete="Delete from msmember where ID_Member='$id'";  
		  
	mysql_query($delete);
	if(mysql_query($delete)){
	echo'
	<script>
	confirm("Data successfully deleted");
	window.location ="data_member.php";
	</script>';
	}
?>  

