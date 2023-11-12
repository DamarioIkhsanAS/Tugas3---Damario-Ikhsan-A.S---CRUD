<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from barang where kode_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Update Barang</h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kode Barang </td>
        <td> <input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Harga Jual </td>
        <td> <input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"> </td>
    </tr>
    <tr>
        <td> Stok Barang </td>
        <td> <input type="text" name="stok_barang" value="<?php echo $data['stok_barang']; ?>"> </td>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update barang set  
nama_barang = '$_POST[nama_barang]',
harga_jual = '$_POST[harga_jual]',
stok_barang = '$_POST[stok_barang]'
where kode_barang = '$_GET[kode]'");

echo "Data barang telah diubah";
echo "<meta http-equiv=refresh content=1;URL='hapus.php'>";

}

?>