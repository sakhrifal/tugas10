<?php
	//koneksi ke server database
	include "connectdb.php";
?>
<form name="form_produk" method="post" action="simpan_produk.php">
    <table width="421" border="0" align="center">
      <tr>
        <td colspan="4" align="center">Input Produk</td>
      </tr>
      <tr>
        <td width="101">Nama Produk</td>
        <td width="3" align="center">:</td>
        <td colspan="2">
          <label for="nProduk"></label>
          <input type="text" name="nProduk" id="nProduk">
        </td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td align="center">:</td>
        <td colspan="2"><label for="ket"></label>
          <input type="text" name="ket" id="ket" /></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td align="center">:</td>
        <td colspan="2"><label for="harga"></label>
          <input type="text" name="harga" id="harga" /></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td align="center">:</td>
        <td colspan="2"><label for="jumlah"></label>
          <input type="text" name="jumlah" id="jumlah" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="61">
          <input type="submit" name="simpan" id="simpan" value="SIMPAN">
        </td>
        <td width="108">
          <input type="reset" name="batal" id="batal" value="BATAL">
        </td>
      </tr>
	</table>

	<table border=1 width=850 align="center">
		<tr bgcolor=#4baafa>
  			<th colspan=10>DAFTAR PRODUK FAZZTRACK</th>
		<tr>
		<tr>
			<td>No.</td>
			<td>Nama Produk</td>
			<td>Keterangan</td>
			<td>Harga</td>
			<td>Jumlah</td>
            <td>Aksi</td>
      <?php
        $query = mysqli_query($mysqli,"select * from produk order by no_id");
        $no = 0;
        while($data = mysqli_fetch_array($query))
        {
            $no++;
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$data[nama_produk]</td>";
            echo "<td>$data[ket]</td>";
            echo "<td>$data[harga]</td>";
            echo "<td>$data[jumlah]</td>";
        ?>
            <td><a href='update_produk.php?update_produk=<?php echo $data['nama_produk']?>'>UPDATE</a>| 
            <a href="hapus_produk.php?gethapus_produk=<?php echo $data['nama_produk']?>" onClick="return confirm('Apakah Anda Yakin Hapus Data dengan 	
            get_nama_produk=<?php echo $data1['nama_produk']?>')">HAPUS</a></td><?php
            echo "</tr>";
            }
        ?>
        </tr>
	</table>
</form>
