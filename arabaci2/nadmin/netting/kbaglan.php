<?php 
try{

	$db=new PDO("mysql:host=localhost;dbname=arabaci1;charset=utf8",'root','12345678');
	//echo "veritabanı bağlantısı basarılı";
}
catch(Exception $e )
{
	echo $e->getMessage();
}

?>