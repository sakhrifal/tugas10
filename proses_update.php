<?php
include "connectdb.php";
$nProduk		= $_POST['nProduk'];
$ket 			= $_POST['ket'];
$harga  		= $_POST['harga'];
$jumlah			= $_POST['jumlah'];


$result = mysqli_query($mysqli,"update produk set nama_produk='$nProduk',ket='$ket',harga='$harga',jumlah='$jumlah' where nama_produk='$nProduk'");

if($result){
	echo "<script type='text/javascript'>
		alert('Data Berhasil Diubah..!');
	</script>";
	echo "<meta http-equiv='refresh' content='0;
	url=http:form_produk.php'>";
}else{
echo "<script type='text/javascript'>
	onload =function(){
	alert('Data Gagal Diubah...!');
	}
	</script>";
}

?>