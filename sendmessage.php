<?php
	mb_internal_encoding("UTF-8");
	$email = $_POST["email"];
	$name = $_POST["name"];
	$title = $_POST["title"];
	$message = $_POST["message"];
	$phone = $_POST["phone"];

	$to = "b2b@org-tech.ru";
	if ($email == "")
		$email = "noreply@org-tech.ru";
	$message .= "\n От $name: $email; tel.: $phone";
	$headers = "From: $name <$email>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8"

	mail($to, $title, $message, $headers); 

	echo "{result:true}";
?>