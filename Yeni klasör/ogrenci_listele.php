<?php

require("baglan.php");
// include,require_once include olursa baglan.php hatalı olsa vs dosyayı içeri aktarır ve çalışırır hatalı olsa bile tüm kodları çalıştırır sunucuya yük bindirir. requireda bi hata varsa baglanda aşağıdaki kodları çalışltırmadan direk içeri aktarcak whilea vs inmicek kod oradsa kalacak, yük bindirmicek.require_once ise bi kez çalıştırınca kaydediyo birdaha çalıştırmıyo sayfayı yenilediğimiz zaman tekrar istekte bulunmuyo en kullanabilir olan hız vs açıısndan avantajlı.
if(!$baglan){ //bağlanmazsa
	die("Bağlantı Başarısız".mysql_connect_error());
//die eğer bağlantı yapılmadıysa aşağıdaki komutları kesiyo aşağıdaki komutları çalıştırmıyo kullanıcıya yük bindirmiyo boşa çalışmıyo
}
else
{
	echo "Bağlantı Başarılı";
}
$sorgu="select * from ogrenci_bilgi";
$a=mysqli_query($baglan,$sorgu); //=== eşittir olan satırla aynı şey ifade ediyor baglan ve sorgu çektik

if(mysqli_num_rows($a)>0) // satırlar doluysa çalıştıracak satır sayısı sayıyor
{
	while($row=mysqli_fetch_assoc($a)){  // liste gibi birşey gönderiyor, vtab gelen bilgileri bir listeye aldık vtabn bilgi almamızı sağlar, bilgileri atadık $a kayıt sayısı satır sayısı her ne haltsa kaç satır varsa hepsini getirmemizi sağlıyo bütün tablodaki değerleri çıkartmak için döndürüyo
		echo "Öğrenci No:".$row["ogrenci_no"]."<br>Ad: ".$row["ad"]."<br>Soyad: ".$row["soyad"]."<br>Bölüm ".$row["bolum"]. "</br>";  // row içindeki öğr no bilgilerini çağırdım, ekrana bastırdıö

	}
}
else{
	echo "Kayıt Bulunamadı";
} 

mysqli_close($baglan); //kapatmasaydık bağlantı sürekli çalışıcaktı ve vtb artı bir yük sağlıyodu
?>

