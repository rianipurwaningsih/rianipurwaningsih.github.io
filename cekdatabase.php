<?php
$koneksi=mysqli_connect("localhost", "root", "", "rianianing");
$nis=$_POST['nisinput'];
$namadpn=$_POST['namadpninput'];
$namablk=$_POST['namablkinput'];
$kotalahir=$_POST['kotalahirinput'];
$TanggalLahir=$_POST['ttlinput'];
$JK=$_POST['JKLinput'];
$hobi=implode(",", $_POST['hobiinput']);
$alamat=$_POST['alamatinput'];

$queri=mysqli_query($koneksi,"INSERT INTO DAFTAR (nis,nama_dpn,nama_blk,Kota_Lahir,Tanggal_Lahir,Jenis_Kelamin,Hobby,Alamat)
VALUES('$nis','$namadpn','$namablk','$kotalahir','$TanggalLahir','$JK','$hobi','$alamat')");
if (!$queri){
	echo ("<script language='javascript'>
	window.alert('Data GAGAL disimpan')
	window.location.href='menudaftar.html';
	</script>");
	
}  
	echo ("<script language='javascript'>
	window.alert('Data berhasil disimpan Terimakasih!')
	window.location.href='menudaftar.html';
	</script>");

?>