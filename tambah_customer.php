<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Customer</h1>
	<form action="simpan_customer.php" method="post">
		<table>
			<tr>
				<td>ID Customer</td>
				<td> : </td>
				<td><input type="text" name="idcustomer"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="namacustomer"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamatcustomer" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Status</td>
				<td> : </td>
				<td><input type="text" name="statuscustomer"></td>
			</tr>
			<tr>
				<td>Type Kamar</td>
				<td> : </td>
				<td><input type="text" name="typekamar"></td>
			</tr>
			<tr>
				<td>Cek-In</td>
				<td> : </td>
				<td><input type="text" name="cek_in"></td>
			</tr>
			<tr>
				<td>Cek-Out</td>
				<td> : </td>
				<td><input type="text" name="cek_out"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>