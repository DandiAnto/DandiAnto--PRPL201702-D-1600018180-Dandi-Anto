<html>
  <head>
  <title>Dandi Anto[1600018180]</title>
  </head>
    <link href="inicss.css" rel="stylesheet" type="text/css">
    <body>
    <div class="home" id="home"></div>
    <div class="judul" id="home"><br>DMG_ HOTEL<br><br></div>
    </body>
</html>

<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "PRPL_Hotel";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$No_iden = $_POST ['No_iden'];
$nama = $_POST ['nama'];
$telfon = $_POST ['telfon'];
$email = $_POST ['email'];
$jeniskamar = $_POST ['jeniskamar'];
$cekin = $_POST ['cekin'];
$cekout = $_POST ['cekout'];


$sql = "UPDATE reservation SET No_iden='$No_iden',nama='$nama',telfon='$telfon',email='$email',jeniskamar='$jeniskamar',cekin='$cekin',cekout='$cekout' AND No_iden='$No_iden'";
if($konek->query($sql)){
  echo "Data Customer BERHASIL diedit!<br/>";
}else{
  echo "Data Customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampildatabase.php'>Kembali</a>";
?>
