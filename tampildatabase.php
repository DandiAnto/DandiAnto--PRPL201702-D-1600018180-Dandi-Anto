
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

$host = "localhost";
$username = "root";
$password = "";
$db_name = "PRPL_Hotel";

$konek = new mysqli($host, $username, $password, $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM reservation";
$data = $konek->query($sql);



echo "<center><table border='5' cellpadding='5' cellspacing='0'></center>";
echo "<tr><td>No.</td><td>NO Identitas</td><td>Namar</td><td>No Telfon<td>Email</td><td>Jenis Kamar</td><td>Check In</td><td>Check Out</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['No_iden']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['telfon']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['jeniskamar']."</td>";
    echo "<td>".$row['cekin']."</td>";
    echo "<td>".$row['cekout']."</td>";
    echo "<td><a href='delete.php?No_iden=".$row['No_iden']."'>Hapus</a></td>";
    echo "<td><a href='update.php?No_iden=".$row['No_iden']."'>Edit</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
