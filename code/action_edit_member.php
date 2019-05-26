<?php ob_start();
include "koneksi.php";
$mid = $_POST['ID_Member'];
$mname = $_POST['namaMember'];
$maddress = $_POST['alamatMember'];
$mphone = $_POST['telpMember'];

	$edit="update msmember set ID_Member='$mid', namaMember='$mname', 
		alamatMember='$maddress', telpMember='$mphone' where ID_Member='$mid'";
	
if ( isset( $_POST['submit'] ) ){
	mysql_query($edit);
	if(mysql_query($edit)){
	echo'
		<script>
		alert("Data successfully updated");
		window.location ="data_member.php";
		</script>';
	}
}else{
	echo'
		<script>
		window.location ="data_member.php";
		</script>';
}
?>