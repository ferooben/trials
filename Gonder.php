 <?php 
 include 'KullaniciKontrol.php'; 

 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 
 
 $mail = new PHPMailer();	//nesne olusturuyoruz

 try {

 		//Server Ayarları

 		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;	//Hata ayıklama 
 		$mail->isSMTP();	//Smtp protokolünü kullanıyoruz 
 		$mail->Host = 'smtp.gmail.com';	//Gmail servis adresi
		$mail->SMTPAuth = true;	//Doğrulama
 		$mail->Username ='phpmialericin.deneme@gmail.com';	//Giriş için mail adresi 
 		$mail->Password ='Phpmailer_123';	//Mail adresimizin şifresi
	 	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  //SSL - TLS Şifreleme etkinleştirme - PHPMailer::ENCRYPTION_SMTPS
	 	$mail->Port = 587; 	//TCP bağlantı girişi - Defualt:25 - PHPMailer::ENCRYPTION_SMTPS için port 465
 		

	 	//Alıcı Ayarları

 		$mail->setFrom('phpmailericin.deneme@gmail.com', $_POST['adSoyad']);	//Gönderen adres, gönderilen isim
 		$mail->addAddress(trim(strtolower($_POST["To"])), 'PHPMailer Maili');	//Alıcı adresi - gösterilecek isim
 		// $mail->addReplyTo('info@example.com', 'Information');	
 		// $mail->addCC('cc@example.com');
 		// $mail->addBCC('bcc@example.com');


 		//Dosya Gönderim Ayarları

 		//$mail->addAttachment(path:"Phpmailler_Dosya.txt")		//Dosya 


 		//İçerik Ayarları

 		$mail->isHTML(true);	//Html içerik
 		$mail->Subject= $_POST['Subject'];		// Mail konusu
 		$mail->Body = $_POST['Mesaj'];		//Mesaj içeriği
 		$mail->send(); 		//Maili gönderiyoruz

 		echo 'Mesajınız '.$_POST['To'].' adresine gönderilmiştir.';
 } catch (Exception $e) {
 	echo 'Mesaj gönderilemedi. Alınan hata:'.$mail->ErrorInfo;
 }

  

 ?>

