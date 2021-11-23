<html>
<head>
	<title>Edit Data</title>
</head>
<body>
 
	<h2>CRUD Edit Data</h2>
	<br/>
	<a href="indektampildata.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA Menu Daftar</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from daftar where nis='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>nis</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nisinput" value="<?php echo $d['nis']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>nama_dpn</td>
					<td><input type="text" name="namadpninput" value="<?php echo $d['nama_dpn']; ?>"></td>
				</tr>
				<tr>
					<td>nama_blk</td>
					<td><input type="text" name="namablkinput" value="<?php echo $d['nama_blk']; ?>"></td>
				</tr>
				<tr>
					<td>Kota_Lahir</td>
					<td><input list="kotalahir" name="kotalahirinput" value="<?php echo $d['Kota_Lahir']; ?>"></td>
				</tr>	
				<tr>
					<td>Tanggal_Lahir</td>
					<td><input type="date" name="ttlinput" value="<?php echo $d['Tanggal_Lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis_Kelamin</td>
					<?php
					$laki =''; $Perempuan='';
					if($d['Jenis_Kelamin'] == 'Laki-Laki')
					{
						$laki= 'checked';
					}
					if($d['Jenis_Kelamin'] == 'Perempuan')
					{
						$perempuan= 'checked';
					}
					?>
					<td>
					<input type="radio" name="JKLinput" value="Laki-Laki" <?=$laki ?>>
        			<label for="Laki-Laki">Laki-Laki</label>
        			<input type="radio" name="JKLinput" value="Perempuan" <?=$Perempuan ?>>
        			<label for="Perempuan">Perempuan</label><br><br>
        		</td>
				</tr>
				<tr>
					<?php
					$Olahraga=""; $Menyanyi=""; $Mengaji="";
					$Hobby = explode(',', $d['Hobby']);
					if (in_array('Olahraga', $Hobby)) {
						$Olahraga="checked";
					}
					if (in_array('Menyanyi', $Hobby)) {
						$Menyanyi="checked";
					}
					if (in_array('Mengaji', $Hobby)) {
						$Mengaji="checked";
					}
					?>
					<td>Hobby</td>
					<td><input type="checkbox"  value="Olahraga" name="hobiinput[]" <?= $Olahraga?>>
        			<label>Olahraga</label>
	        		<input type="checkbox"  value="Menyanyi" name="hobiinput[]" <?= $Menyanyi?>>
	        		<label>Menyanyi</label>
        			<input type="checkbox"  value="Mengaji" name="hobiinput[]" <?= $Mengaji?>>
        			<label>Mengaji</label></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea rows="5" cols="30" name="alamatinput"><?php echo $d['Alamat']; ?></textarea></td>
				</tr>
				<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>	
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>