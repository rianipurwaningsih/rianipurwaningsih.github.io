<?php
include 'koneksi.php';
$nis=$_POST['nisinput'];
$nama_dpn=$_POST['namadpninput'];
$nama_blk=$_POST['namablkinput'];
$kotalahir=$_POST['kotalahirinput'];
$Tanggal_Lahir=$_POST['ttlinput'];
$Jenis_Kelamin=$_POST['JKLinput'];
$Hobby=implode(",", $_POST['hobiinput']);
$Alamat=$_POST['alamatinput'];

$sql = mysqli_query($koneksi,"update daftar set nama_dpn='$nama_dpn', nama_blk='$nama_blk', Kota_Lahir='$kotalahir', Tanggal_Lahir='$Tanggal_Lahir', Jenis_Kelamin='$Jenis_Kelamin', Hobby='$Hobby', Alamat='$Alamat' where nis='$nis'");
 
if(!$sql){
		echo mysqli_error($koneksi);
}{
	echo "berhasil";
}

header("location:indektampildata.php");
 
?>