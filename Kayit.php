<?php 


try {
	$db= new PDO("mysql:host=localhost;dbname=phpogreniyorum","root","");
	$db->exec('insert into kullanici (Kullanici_Ad,Kullanici_Sifre) values ("'.$_POST["username"].'","'.$_POST["userpassword"].'")');
	$db->exec("SET NAMES utf8");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
} 

?>
