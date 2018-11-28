<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Simpan Data Buku Tamu</title>
</head>
<body>
	<?php
	$koneksi = mysqli_connect("localhost","root","","coba_db") or die("database tidak ditemukan");
	$tampil=mysqli_query($koneksi, "select * from bukutamu");
	?>
	<h1>Buku tamu</h1>
	<table border="1">
		<?php
		while ($r=mysqli_fetch_array($tampil))
		{
			?>

			<tr>
				<td>Nama :<?=$r['nama']?></td>
				<td>Email:<?=$r['email']?></td>
				<td>Pesan:<?=$r['pesan']?></td>
			</tr>
			<?php
		}
		?>
	</table>
	

</body>
</html>

