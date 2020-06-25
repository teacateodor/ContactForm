<?php

	header("Location: index.html");

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$post_code = $_POST['post_code'];
	$message = $_POST['message'];
	$nino = $_POST['nino'];
	$utr = $_POST['utr'];
	$travel = $_POST['travel'];
	$position = $_POST['position'];
	$tickets = $_POST['tickets'];

	$email_from = 'teodor.teaca@gmail.com';
	$email_subject = "New client";

	$email_body = "Name: $name.\n".
				  "Email: $visitor_email.\n".
				  "Phone Number: $phone_number.\n".
				  "Post Code: $post_code.\n".
				  "Position: $position.\n".
				  "Tickets: $tickets.\n".
				  "NINO: $nino.\n".
				  "UTR: $utr.\n".
				  "Travel: $travel.\n".
				  "Message: $message.\n";
			
	$to = "teodor.teaca@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email\r\n";
	
	mail($to, $email_subject, $email_body, $headers)

?>
