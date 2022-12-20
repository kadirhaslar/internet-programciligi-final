<?php 
require 'kbaglan.php';


if(isset($_POST['kayit']))
{
	$kullanici_adi = $_POST['kullanici_adi'];
	$kullanici_sifre = $_POST['kullanici_sifre'];
	

if(!$kullanici_adi){

	echo "lütfen kullanıcı adı  giriniz.";

}elseif(!$kullanici_sifre){
echo "Lütfen Şifre Giriniz";
}
else{
	$sorgu= $db->prepare('INSERT INTO kullanici set kullanici_adi=?,kullanici_sifre=?');
	$ekle=$sorgu->execute([
$kullanici_adi,$kullanici_sifre,
	]);
	if($ekle){
		echo "kayıt başarılı...";
		header('refresh:2; giris.php');
	} else{
		echo "bir hata olustu";
	}
}
}

?>