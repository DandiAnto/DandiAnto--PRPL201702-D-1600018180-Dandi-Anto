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

$No_iden = $_GET['No_iden'];

$sql = "DELETE FROM reservation WHERE No_iden='$No_iden'";
if($konek->query($sql)){
  echo "Data Hotel BERHASIL dihapus!<br/>";
}else{
  echo "Data Hotel GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampildatabase.php'>Kembali</a>";
?>