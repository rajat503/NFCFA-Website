<?php
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['designation']) && isset($_POST['organization']) && isset($_POST['address']) && isset($_POST['pincode']) && isset($_POST['city']) && isset($_POST['telephone']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['acco']) && isset($_POST['oral_poster']) && isset($_POST['acco_fee']) && isset($_POST['reg_fee']) && isset($_POST['total']) && isset($_POST['trans_id']))
{
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
	$acco_fee=$_POST['acco_fee'];
	$reg_fee=$_POST['reg_fee'];
	$total=$_POST['total'];
	$trans_id=$_POST['trans_id'];	


	if(!empty($first_name) && !empty($first_name) && !empty($last_name) && !empty($designation) && !empty($organization) && !empty($address) && !empty($pincode) && !empty($city) && !empty($telephone) && !empty($mobile) && !empty($email) && !empty($acco) && !empty($oral_poster) && !empty($acco_fee) && !empty($reg_fee) && !empty($total) && !empty($trans_id))
	{
		require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = '';
$mail->FromName = 'Mailer';
$mail->addAddress('');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Registration for NFCFA';
$mail->Body    = '<body>
<p7><strong>Details</strong></p7></div>
<p><strong>Name: </strong>'.$first_name.' '.$last_name.'<br>'.'<strong>Designation: </strong>'.$designation.'<br>'.'<strong>Organization: </strong>'.$organization.'<br>'.'<strong>Address: </strong>'.$address.'<br>'.'<strong>Pincode: </strong>'.$pincode.'<br>'.'<strong>City: </strong>'.$city.'<br>'.'<strong>Telephone: </strong>'.$telephone.'<br>'.'<strong>Mobile: </strong>'.$mobile.'<br>'.'<strong>E-mail: </strong>'.$email.'<br>'.'<strong>Accomodation: </strong>'.$acco.'<br>'.'<strong>Type: </strong>'.$oral_poster.'<br>'.'<strong>Accomodation Fee: </strong>'.$acco_fee.'<br>'.'<strong>Registration Fee: </strong>'.$reg_fee.'<br>'.'<strong>Total: </strong>'.$total.'<br>'.'<strong>Transaction ID: </strong>'.$trans_id.'<br>'.'</p></body>'; 

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
}
else
{
	header('Location: incomplete.html');
}
?>