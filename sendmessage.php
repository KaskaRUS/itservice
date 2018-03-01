<?php
	$email = $_POST["email"];
	$name = $_POST["name"];
	$title = $_POST["title"];
	$message = $_POST["message"];

	$to = "nikolai@zhdanov.space";//"b2b@org-tech.ru";
	$message .= "\n От $name: $email";
	$headers = "From: $name <$email>";

	mail($to, $title, $message, $headers); 

	echo "{result:true}";
?>