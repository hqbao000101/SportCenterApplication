<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	class ContactController {
		function list() {
			include ABSPATH . "pages/contact.php";
		}

		function sendContact() {
			$name = $_POST['user-name'];
			$email = $_SESSION['email'];
			$mobile = $_POST['PhoneNumber'];
			$title = $_POST['Title'];
			$message = $_POST['Content'];
			$content = "
					Name: $name <br>
					SDT: $mobile <br>
					Email: $email <br>
					Title: $title <br>
					Content: $message";

			$this->sendEmail($email, $_SESSION['firstname'],"CS207bSportManagement@gmail.com", "Admin", "Contact", $content);
			header("location: index.php");
		}

		function sendEmail($from_email, $from_name, $to_email, $to_name, $subject, $content) {
			
			$mail = new PHPMailer(true);

			try {
			    $mail->SMTPDebug = 0;
			    $mail->isSMTP(); // Send using SMTP
			    $mail->Host       = 'smtp.gmail.com';// Set the SMTP server to send through
			    $mail->SMTPAuth   = true; // Enable SMTP authentication
			    $mail->Username   = 'CS207bSportManagement@gmail.com'; // SMTP username
			    $mail->Password   = 'qxvmjmirrshyuxxu'; // SMTP password
			    //owdzllkousimstgw, romkvkmtafjkisqr
			    // cs207b: qxvmjmirrshyuxxu
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
			    $mail->Port       = 587; //465                                  

			    //Recipients
			    $mail->setFrom($from_email, $from_name);
			    $mail->addAddress($to_email, $to_name);     
			    $mail->addReplyTo($from_email, $from_name);

			    // Content
			    $mail->isHTML(true);                        
			    $mail->Subject = $subject;
			    $mail->Body    = $content;
			    $mail->AltBody = $content;

			    return $mail->send();
			    
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}
?>