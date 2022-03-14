 <?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

try {
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
    //Server settings

    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'giowm1037.siteground.biz';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mail@nichme.com';                     // SMTP username
    $mail->Password   = 'ikeku40&7Jj';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mail@nichme.com', 'NichMe');
    $mail->addAddress('wilcomsoftg@gmail.com', 'Testing');     // Add a recipient
     $mail->addReplyTo('mail@nichme.com', 'Nich me Services');


 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your First Breakthrough Niche System';
    $mail->Body    = '<b>Hello .$allname;</b> <br>
	<b>Thank you for filling our form that will reveal the people niches you can go after. If you are seeing two word niches, then you are among the luckiest people that will be placed at the very top of our business and you will be setup to earn massively. </b> 
	<br><br>
	 <b> Select one of the unique niches below to get started.</b>
	<br>
	
	$nationality . $nationality <br>
	$nationality . $skills <br>
	$nationality . $passion <br>
	$nationality . $ambition <br>
	$nationality . $position <br>
	$nationality . $religion <br>
	$nationality . $tribe <br>
	$nationality . $hstatus <br>
	$nationality . $agegroup <br>
	$nationality . $incomestatus <br>
	
	In other to be the proud owner of any one of them, which contains several other niches
	';


    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>