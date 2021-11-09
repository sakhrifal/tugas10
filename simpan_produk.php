<?php
include "connectdb.php";
$nProduk		= $_POST['nProduk'];
$ket 			= $_POST['ket'];
$harga  		= $_POST['harga'];
$jumlah			= $_POST['jumlah'];


$result = mysqli_query($mysqli,"insert into produk(nama_produk,ket,harga,jumlah) values('$nProduk','$ket','$harga','$jumlah')");

if($result){
	echo "<script type='text/javascript'>
		alert('Data Berhasil Disimpan..!');
	</script>";
	echo "<meta http-equiv='refresh' content='0;
	url=http:form_produk.php'>";
}else{
echo "<script type='text/javascript'>
	onload =function(){
	alert('Data Gagal Disimpan!');
	}
	</script>";
}

?>