<?php

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$designation=$_POST['designation'];
	$organization=$_POST['organization'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$telephone=$_POST['telephone'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$acco=$_POST['acco'];
	$oral_poster=$_POST['oral_poster'];
	$abstract=$_POST['abstract'];
	$accompany=$_POST['accompany'];
	$acco_fee=$_POST['acco_fee'];
	$reg_fee=$_POST['reg_fee'];
	$total=$_POST['total'];
	$bank=$_POST['bank'];
	$trans_id=$_POST['trans_id'];	
	$date_trans=$_POST['date_trans'];

	if(!empty($first_name) && !empty($last_name) && !empty($designation) && !empty($organization) && !empty($address) && !empty($pincode) && !empty($city) && !empty($mobile) && !empty($email) && !empty($acco) && !empty($abstract) && !empty($reg_fee) && !empty($total) && !empty($trans_id) && !empty($bank) && !empty($date_trans))
	{
		require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nfcfa2015@gmail.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'nfcfa2015@gmail.com';
$mail->FromName = 'NFCFA 2015';
$mail->addAddress($email);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('mainak@goa.bits-pilani.ac.in');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Registration for NFCFA 2015';
$mail->Body    = '<body>
<p7><strong>Registration Details:</strong></p7></div>
<p><br><strong>Name: </strong>'.$first_name.' '.$last_name.'<br>'.'<strong>Designation: </strong>'.$designation.'<br>'.'<strong>Organization: </strong>'.$organization.'<br>'.'<strong>Address: </strong>'.$address.'<br>'.'<strong>Pincode: </strong>'.$pincode.'<br>'.'<strong>City: </strong>'.$city.'<br>'.'<strong>Telephone: </strong>'.$telephone.'<br>'.'<strong>Mobile: </strong>'.$mobile.'<br>'.'<strong>E-mail: </strong>'.$email.'<br>'.'<strong>Accomodation: </strong>'.$acco.'<br>'.'<strong>Type: </strong>'.$oral_poster.'<br>'.'<strong>Abstract Enclosed: </strong>'.$abstract.'<br>'.'<strong>Accompanying Person: </strong>'.$accompany.'<br>'.'<strong>Accommodation Fee: </strong>'.$acco_fee.'<br>'.'<strong>Registration Fee: </strong>'.$reg_fee.'<br>'.'<strong>Total: </strong>'.$total.'<br>'.'<strong>Bank: </strong>'.$bank.'<br>'.'<strong>Transaction ID: </strong>'.$trans_id.'<br>'.'<strong>Date: </strong>'.$date_trans.'<br> <br>'.'<strong>Signature: </strong>'.'</p><p>Please send a duly signed scanned or hard copy of this email to Convener, NFCFA 2015 at mainak@goa.bits-pilani.ac.in in case of NEFT transfers or by post if you are using a demand draft for payment.</p></body>'; 

if(!$mail->send()) {
    header('Location: fail.html');
} else {
    header('Location: success.html');;
}

	}
	else
	{
		header('Location: incomplete.html');
	}
?>