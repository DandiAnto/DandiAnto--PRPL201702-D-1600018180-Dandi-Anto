<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "PRPL_Hotel";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}
if(isset($_POST['add'])){
$No_iden = $_POST ['No_iden'];
$nama = $_POST ['nama'];
$telfon = $_POST ['telfon'];
$email = $_POST ['email'];
$jeniskamar = $_POST ['jeniskamar'];
$cekin = $_POST ['cekin'];
$cekout = $_POST ['cekout'];

$sql = "INSERT INTO reservation(No_iden, nama, telfon,email,jeniskamar,cekin,cekout) VALUES ('$No_iden','$nama','$telfon','$email','$jeniskamar','$cekin','$cekout')";
if($konek->query($sql)){
	echo "Data berhasil di tambah <align='center'br/>";
}
else{
	echo "Data PRPL_Hotel Gagal Di Tambah : ".$konek->error."<align='center'br/>";
}
}
echo "<a href='home3.php'>Kembali</a>";
?>