

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


$No_iden   = $_GET['No_iden'];

$reservation = mysqli_query($konek, " SELECT * FROM reservation where No_iden='$No_iden'");
$row = mysqli_fetch_array($reservation);
?>

<html>
  <head>
  <title>Dandi Anto[1600018180]</title>
  </head>
    <link href="inicss.css" rel="stylesheet" type="text/css">
    <body>
    <div class="home" id="home"></div>
    <div class="judul" id="home"><br>DMG_ HOTEL<br><br></div>
  <div class = "transparan">
        <form action="update_customer.php" method="POST">
      
        <label>No Identitias</label>
        <input type="text" name="No_iden" value="<?php echo $row['No_iden'];?>">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $row['nama'];?>">
        <label>No Telfon</label>
        <input type="text" name="telfon" value="<?php echo $row['telfon'];?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>">
        <label>Jenis Kamar</label>
        <select  name="jeniskamar" >
        <option value="SUPERIOR_ROOM">SUPERIOR ROOM</option>
        <option value="BUSINESS_ROOM">BUSINESS ROOM</option>
        <option value="Suite">SUITE</option>
      </select>
        <label>Check In</label>
        <input type="date" name="cekin" value="<?php echo $row['cekin'];?>">
        <label>Check Out</label>
        <input type="date" name="cekout"  value="<?php echo $row['cekout'];?>">
    <input type="submit" name="add" value="Submit">   
      <input type="reset" value="Reset">  
  </form>
   </div>
     <li><a href="tampildatabase.php">Kembali</a></li>
  </body>
</html>
