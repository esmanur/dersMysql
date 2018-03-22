<?php
require("baglan.php");
// include,require_once
if(!$baglan){ //bağlanmazsa
	die("Bağlantı Başarısız".mysql_connect_error());
//die eğer bağlantı yapılmadıysa aşağıdaki komutları kesiyo aşağıdaki komutları çalıştırmıyo kullanıcıya yük bindirmiyo boşa çalışmıyo
}
else
{
	echo "Bağlantı Başarılı";
}
$ogrno=$_POST["ogr_no"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$bolum=$_POST["bolum"];
if ($ogrno&$ad&$soyad&$bolum) { //boş değer olmazsa sorguyu yapıyoruz
	$sorgu="insert into ogrenci_bilgi(ogrenci_no,ad,soyad,bolum) values ('$ogrno','$ad','$soyad','$bolum')";

	if(mysqli_query($baglan,$sorgu)===True) //=== demekhem değerler aynı hem tür aynı her anlamda eşit olucak demek bağlan ve sorguyu çağırdık başarılıysa bla bla bla
	 { 
	 	echo"Kayıtlar Başarıyla Eklendi";
	 }
	 else{
	 	echo"Kayıtlar eklenemedi";
	 }

}
else{
	echo"Lütfen tüm alanları doldurunuz";
   }
?>