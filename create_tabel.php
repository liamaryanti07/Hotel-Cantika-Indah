<?php 
	$konek = new mysqli("localhost","root","","hotelia");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel inap
	$sql = "create table pesan (idcustomer varchar(30) not null primary key, 
	namacustomer varchar(40), 
	alamatcustomer varchar(200),
	Statuscustomer varchar(200),
	typekamar varchar(200),
	cek_in varchar(200),
	cek_out varchar(200))";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
 ?>