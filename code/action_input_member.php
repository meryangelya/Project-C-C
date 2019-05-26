<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

$mid = $_POST['ID_Member'];
$mname = $_POST['namaMember'];
$maddress = $_POST['alamatMember'];
$mphone = $_POST['telpMember'];

$query="INSERT INTO msmember VALUES ('$mid', '$mname', '$maddress', '$mphone') " ;

if ( isset( $_POST['submit'] ) ){
	$hasil=mysql_query($query);
	if ($hasil){
		echo'
		<script>
		alert("Data successfully stored");
		window.location ="data_member.php";
		</script>';
		
	} else { 
		echo'
		<script>
		alert("Data failed stored");
		window.location ="data_member.php";
		</script>';
	}
}else{
	echo'
		<script>
		window.location ="home.php";
		</script>';
}	
?>
