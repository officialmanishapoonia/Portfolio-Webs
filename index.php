<?php
include('smtp/PHPMailerAutoload.php');
$name=$_POST["name"];
$emai=$_POST["mail"];
$subject="thank you ";
$cc=$_POST["mob"];

$html='you are covered';
$mine = "webdearsproject@gmail.com";
echo smtp_mailer($our,'subject',$html);
function smtp_mailer($email,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "webdearsproject@gmail.com";
	$mail->Password = "web@1234";
	$mail->SetFrom("webdearsproject@gmail.com");
	$mail->Subject = "subjectt....";
	$mail->Body ="messagyoue you want";
	$mail->AddAddress('webdearsproject@gmail.com');
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo "cool";
	}else{
		return 'Sent';
		echo "thank you";
	}
}
?>