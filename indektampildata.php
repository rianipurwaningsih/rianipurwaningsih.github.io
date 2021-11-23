<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data Dari Database</title>
</head>
<body>

	<h2>CRUD Menampilkan Data </h2>
	<br>
	<a href="menudaftar.html"> + MENU DAFTAR</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>nis</th>
			<th>nama_dpn</th>
			<th>nama_blk</th>
			<th>Kota_Lahir</th>
			<th>Tanggal_Lahir</th>
			<th>Jenis_Kelamin</th>
			<th>Hobby</th>
			<th>Alamat</th>
			<th>Option</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from daftar");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				
				<td><?php echo $d['nis'];?></td>
				<td><?php echo $d['nama_dpn'];?></td>
				<td><?php echo $d['nama_blk'];?></td>
				<td><?php echo $d['Kota_Lahir'];?></td>
				<td><?php echo $d['Tanggal_Lahir'];?></td>
				<td><?php echo $d['Jenis_Kelamin'];?></td>
				<td><?php echo $d['Hobby'];?></td>
				<td><?php echo $d['Alamat'];?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
</table>
</body>
</html>