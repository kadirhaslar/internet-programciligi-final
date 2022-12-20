<?php 
require 'kbaglan.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Kayıt Ol</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login">
	<div class="login-screen">
		<div class="app-title">
			<h1>Kayıt Ol</h1>
		</div>
		<form action="kislem.php" method="POST">
		<div class="login-form">
			<div class="control-group">
				<input type="text" name="kullanici_adi" class="login-field" placeholder="kullanıcı adı" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
			</div>
			<div class="control-group">
				<input type="password" name="kullanici_sifre" class="login-field " placeholder="şifre" id="login-pass">
				<label class="login-field-icon fui-user" for="login-pass"></label>
			</div>

			<div class="control-group">
				<input type="text" name="kullanici_isim" class="login-field" placeholder="kullanıcı ad" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
			</div>

			<div class="control-group">
				<input type="text" name="kullanici_soyad" class="login-field " placeholder="Soyad" id="login-surname">
				<label class="login-field-icon fui-user" for="login-pass"></label>
			</div>

			<div class="control-group">
				<input type="text" name="kullanici_mail" class="login-field " placeholder="E-Mail" id="login-mail">
				<label class="login-field-icon fui-user" for="login-pass"></label>
			</div>





			
			<button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>

</div>
</form>
<a href="giris.php"><button name="giris"class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
</div>
</div>


</body>
</html>