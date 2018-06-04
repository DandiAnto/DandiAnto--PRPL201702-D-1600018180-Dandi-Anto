<html>
<head><title></title></head>	
<style type="text/css">
body{
background-color :white;
background-size:cover;
}
</style>
<body></body>
</html>
</table>
<center><br>
<td>--- PEMBAYARAN ---</td>
<P><SCRIPT language="JavaScript">
<!--
//window.onload = function(){}
function jumlah_hari(){
    var bil1 = parseFloat(document.reservation.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.reservation.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan : " + hasil +"hari</center>");
}
function harga(){
    var bil3 = parseFloat(document.reservation.apa.value);
    if (isNaN (bil3))
    bil3=0.0;
    var bil1 = parseFloat(document.reservation.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.reservation.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    var harga = hasil * bil3;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan : " + hasil +" hari</center>");
    document.write("<center>total jumlah harga :Rp. "+ harga +"</center>");
}
function denda(){
    var bil5 = parseFloat(document.reservation.opo.value);
    if (isNaN (bil5))
    bil5=0.0;
    var bil1 = parseFloat(document.reservation.cekin.value);
    if (isNaN (bil1))
    bil1=0.0;
    var bil2 = parseFloat(document.reservation.cekout.value);
    if (isNaN (bil2))
    bil2=0.0;
    var hasil = bil2 - bil1;
    var den = bil5 * hasil;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lama Denda : " + hasil +" hari</center>");
    document.write("<center>total nominal denda :Rp. "+ den +"</center>");
}
function total() {
    var bil5 = parseFloat(document.reservation.opo.value);
    if (isNaN (bil5))
    bil5=0.0;
    var b1 = parseFloat(document.reservation.cekin.value);
    if (isNaN (b1))
    b1=0.0;
    var b2 = parseFloat(document.reservation.cekout.value);
    if (isNaN (b2))
    bil2=0.0;
     var bil3 = parseFloat(document.reservation.apa.value);
    if (isNaN (bil3))
    bil3=0.0;  
    var hasil = b2 - b1;
    var den = bil5 * hasil;
    var harga = hasil * bil3;
    var totalbayar = harga + den;
    document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
    document.write("<hr>");
    document.write("<center>Lamanya hari penginapan :"+ hasil +"hari</center>");
    document.write("<center>Total Jumlah Harga : Rp. "+ harga +"</center>");  
    document.write("<center>Total nominal denda : Rp. "+ den +"</center>");
    document.write("<center>Jumlah Total Pembayaran + denda: Rp. "+ totalbayar +"</center>");
       
}
--></SCRIPT></P></center>
<FORM NAME ="reservation">
<PRE>
<font color="black">Check In          :<input type="text" size="11" name="cekin"></font></br>
<font color="black">Check Out         :<input type="text" size="11" name="cekout"></font></br>
<font color="black">Harga Kamar       :<input type="text" size="11" name="apa"></font>
</PRE>
<tr>
        <td>Harga kamar</td>
        <td><pre>
            Superior         = Rp.300,000<br>
            Business room    = Rp.400,000<br>
            Suite room       = Rp.800,000<br>
        </td>
</tr>
<table>
<font color="black">Harga Kamar     :<input type="text" size="11" name="jeniskamar"></font>
<font color="black">Nominal Denda   :<input type="text" size="11" name="opo" placeholder="jika ada denda"></font>
</table>
</PRE>
<INPUT TYPE="button" value="Lama Menginap" onclick="jumlah_hari()">
<INPUT TYPE="button" value="Harga" onclick="harga()">
<INPUT TYPE="button" value="Total Denda" onclick="denda()">
<INPUT TYPE="button" value="Pembayaran Keseluruhan" onclick="total()">
<INPUT TYPE="reset" value="Ulang"><br/><br/>
</form>
</body>
</html>