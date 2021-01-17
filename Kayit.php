<?php 

 
try {
	
	$db= new PDO("mysql:host=localhost;dbname=phpogreniyorum","root","");
	$db->exec('insert into kullanici (Kullanici_Ad,Kullanici_Sifre) values ("'.$_POST["username"].'","'.$_POST["userpassword"].'")');
} catch (PDOException $e) {
	echo $e->getMessage();
} 

?>
