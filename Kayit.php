<?php 

 
try {
	
	$db= new PDO("mysql:host=localhost;dbname=phpogreniyorum","root","");
	echo "veritabanı bağlantısı başarılı";

} catch (PDOException $e) {
	echo $e->getMessage();
}

if($db->exec('insert into kullanici (Kullanici_Ad,Kullanici_Sifre) values ("'.$_POST["username"].'","'.$_POST["userpassword"].'")'))
	echo "kayıt başarıyla eklendi";



?>
