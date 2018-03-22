<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Öğrenci Bilgi Tablosu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script src="<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div>
<form class="form-signin" action="ogrenci_kayit.php" method="POST">
	<h2 class="form-signin-heading"> Öğrenci Kayıt Formu </h2>
	<input type="number" name="ogr_no" placeholder="Öğrenci No" class="form-control">
	<input type="text" name="ad" placeholder="Ad" class="form-control">
	<!--placeholder tablo adının  inputun içinde görünmesini sağlıyo -->
	<input type="text" name="soyad" placeholder="Soyad"class="form-control">
	<input type="text" name="bolum" placeholder="Bölüm"class="form-control">
	<button class="btn btn-lg btn-primary btn-block" type="submit">GÖNDER</button>

</form>
</div>
</br>
<form class="form-signin" action="ogrenci_listele" method="POST">
	<button class="btn btn-lg btn-primary btn-block" type="submit">KAYITLARI GÖR</button>
</form>
</body>
</html>