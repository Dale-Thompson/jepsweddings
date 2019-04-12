
 <?php
 $name = $_POST['name'];
 $date = $_POST['date'];
 $email = $_POST['email'];
 $package = $_POST['package'];
 $location = $_POST['location'];
 $market = $_POST['market'];

 
 ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = 'dale@vectorlive.com.au';
    $subject = 'Quote Request';
	$message = '<html><body>';
	$message .='<h1>Quote Request!</h1>';
	$message .='<br><p>This email was sent by '.$email.' and their full names are '.$name.'</p>';
	$message .='<br><p>Requested Package :</p>';
    $message .= $package;
    $message .='<br><p>Requested Date :</p>';
	$message .= $package;
	$message .='<br><p>Their email :</p>';
	$message .= $email;
	$message .='<br><p>Their requested location :</p>';
    $message .= $location;
    $message .='<br><p>How they found you :</p>';
	$message .= $market;
	$message .='</body></html>';
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "CC: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$subject,$message, $headers);
    $message='<div><i class="fa fa-check" style="color:#E883A3; font-size: 50px;"></i><p>Thanks! Your email has been received!</p> </div><p>We will endevour to get back to you in 48 Hours, like fine wine, its worth the wait!</p>';
    $success='Sent!';
    echo json_encode(array('message'=>$message,'$success'=>$success));


 ?>