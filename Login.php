<?php 
session_start();
  $kadi=$_POST["username"];
  $kpass=$_POST["userpassword"];

try {
	$db= new PDO("mysql:host=localhost;dbname=phpogreniyorum","root","");
	$db->exec("SET NAMES utf8");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	$sorgu=$db->query("SELECT * FROM kullanici WHERE Kullanici_Ad='".$kadi."' and Kullanici_Sifre='".$kpass."'");
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if($db){
		$_SESSION["username"]=$kullanici["Kullanici_Ad"];

		header('location:Panel.php');
	}

} catch (Exception $e) {
	echo $e->getMessage();
}
 

?>
