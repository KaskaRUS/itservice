<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	mb_internal_encoding("UTF-8");
	$email = $_POST["email"];
	$name = $_POST["name"];
	$title = $_POST["title"];
	$message = $_POST["message"];
	$phone = $_POST["phone"];

	$message .= "\n От $name: $email; $phone";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load composer's autoloader
	require 'vendor/autoload.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'noreply@org-tech.ru';                 // SMTP username
	    $mail->Password = 'ZKw1{jOT';                           // SMTP password
	    $mail->SMTPSecure = 'ssl';    
	    $mail->CharSet = "utf-8";                        // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 465;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('noreply@org-tech.ru', 'Site message');
	    $mail->addAddress('b2b@org-tech.ru');     // Add a recipient

	    //Content
	    $mail->isHTML(false);                                  // Set email format to HTML
	    $mail->Subject = $title;
	    $mail->Body    = $message;

	    $mail->send();
	    echo "{result:true}";
	} catch (Exception $e) {
	    echo "{result:false}";
	}


	
?>