<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - TAMBAH DATA</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_mhs.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" required ></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"required ></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"required ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>