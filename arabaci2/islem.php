
<?php
require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {

	


$kaydet=$db->prepare("INSERT into bilgilerim set 
    bilgilerim_ad=:bilgilerim_ad,
    bilgilerim_soyad=:bilgilerim_soyad,
    bilgilerim_mail=:bilgilerim_mail,
    bilgilerim_yas=:bilgilerim_yas
    ");

$insert=$kaydet->execute(array(

'bilgilerim_ad' => $_POST['bilgilerim_ad'],
'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
'bilgilerim_mail' => $_POST['bilgilerim_mail'],
'bilgilerim_yas' => $_POST['bilgilerim_yas'] 

));

if($insert)
{
Header("Location:index.php?durum=ok");
exit;
	//echo "kayıt basarılı ";
}
else
{
	Header("Location:index.php?durum=no");
	exit;
	//echo "kayıt basarısız";
}
}



if (isset($_POST['updateislemi'])) {
	
	$bilgilerim_id=$_POST['bilgilerim_id'];

	$kaydet=$db->prepare("UPDATE bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas
		where bilgilerim_id={$_POST['bilgilerim_id']}
		");

	$insert=$kaydet->execute(array(

		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas']
	));


if ($insert) {
		
		//echo "kayıt başarılı";

		Header("Location:duzenle.php?durum=ok&bilgilerim_id=$bilgilerim_id");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:duzenle.php?durumno&bilgilerim_id=$bilgilerim_id");
		exit;
}
}


if ($_GET['bilgilerimsil']=="ok")
{
	$sil=$db->prepare("DELETE from bilgilerim where bilgilerim_id=:id");
	$kontrol=$sil->execute(array(
'id'=> $_GET['bilgilerim_id']
	));

	if($kontrol)
	{
		Header("location:index.php?durum=ok");
		exit;

	}
	else
	{
		header("location:index.php?durum=no");
		exit;
	}
}








?>