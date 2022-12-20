<?php 
try{

$db=new PDO("mysql:host=localhost;dbname=arabaci1;charset=utf8",'root','12345678');

//echo "Veritabanı Bağlantısı Başarılı";


}
 catch (PDOExpception $e)
{
	echo $e->getMessage();
}


?>