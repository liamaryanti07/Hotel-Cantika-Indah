<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "hotelia";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST ['idcustomer'];
$namacustomer = $_POST ['namacustomer'];
$alamatcustomer = $_POST ['alamatcustomer'];
$statuscustomer = $_POST ['statuscustomer'];
$typekamar = $_POST ['typekamar'];
$cek_in = $_POST ['cek_in'];
$cek_out = $_POST ['cek_out'];

$sql = "INSERT INTO inap(idcustomer, namacustomer, alamatcustomer, statuscustomer, typekamar, cek_in, cek_out) VALUES ('$idcustomer','$namacustomer','$alamatcustomer', '$statuscustomer', '$typekamar', '$cek_in', '$cek_out')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_customer.php'>Tambah Data Customer<a/>";
?>