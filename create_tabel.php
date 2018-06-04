 	<?php 
	$konek = new mysqli("localhost","root","","PRPL_Hotel");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel customer
	$sql = "create table reservation (No_iden varchar(30) not null primary key, nama varchar(30), telfon varchar(20), email varchar(20), jeniskamar varchar(20), cekin varchar(20), cekout varchar (20))";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

 ?>