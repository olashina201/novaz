 <?php
 session_start();
 // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 
 require '../PHPMailer/src/Exception.php';
 require '../PHPMailer/src/PHPMailer.php';
 require '../PHPMailer/src/SMTP.php';
 // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.novazarc.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mail@novazarc.com';                     // SMTP username
    $mail->Password   = 'welcome&7Jj';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mail@novazarc.com', 'Novazarc');
    $mail->addAddress ($email);     // Add a recipient
    $mail->addReplyTo('mail@novazarc.com', 'No  reply');
 
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Very email on Novazarc';
    $mail->Body    = "<b>Hello .$fname;</b> <br> <br>
	
	<b>Thank you for filling our signup form.</b><br>
	<b>Click on verify my account below to login and access our portal</b>
	<br>
	

 	
	Name: $uname <br>
	Email: .$uemail <br>
	Password: $pass <br> <br>

    <a href='https://www.novazarc.com/Verify?usn=$uemail' target='_blank' style='background:#3c9; color:#fff; font-weight:bold;font-size:24px;text-shadow:1px 1px 1px #000;  padding:10px;text-decoration:none'>VERIFY MY EMAIL</a>
	";

    $mail->send();
     
} 
catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}						   
?>