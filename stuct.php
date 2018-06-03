<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div class="container">
		<h2> ***************************** </h2>
		<h2> Hotel Cantika Indah </h2>
		<h2> BUKTI PEMBAYARAN </h2>
		<h3> Jalan Nuansa Indah </h3>
		<h2> ***************************** </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "cantika";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from pesan where id_pesanan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['username']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> Bad Room</td>";
		echo "<td> : </td>";
		echo "<td>".$row['type1']*750000;
		echo "</td>";
		echo "<td>".$row['type1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Singel Room </td>";
		echo "<td> : </td>";
		echo "<td>".$row['type2']*550000;
		echo "</td>";
		echo "<td>".$row['type2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Superior Room </td>";
		echo "<td> : </td>";
		echo "<td>".$row['type3']*350000;
		echo "</td>";
		echo "<td>".$row['type3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Twin Room </td>";
		echo "<td> : </td>";
		echo "<td>".$row['type4']*1000000;
		echo "</td>";
		echo "<td>".$row['type4']."</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>