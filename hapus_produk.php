<?php
	include"connectdb.php";
	
	$a = $_GET['gethapus_produk'];
	
	$result = mysqli_query($mysqli,"delete from produk where nama_produk = '$a'");
	
	if($result){
		echo "<script type='text/javascript'>
			alert('Data Berhasil Didhapus..!');
		</script>";
		echo "<meta http-equiv='refresh' content='0;
		url=form_produk.php'>";
	}else{
	echo "<script type='text/javascript'>
		onload =function(){
		alert('Data Gagal Dihapus!');
		}
		</script>";
	}
?>