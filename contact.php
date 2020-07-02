<?php

if (isset($_POST['submit'])){
	$name = $_POST['recipient-name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['recipient-Id'];
	$massage = $_POST['massage'];

	$mailTo = "nisha@greenlinen.in";
	$headers = "From :".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$massage;
	
	mail($mailTo, $subject, $txt, $headers);
	header(alert("MASSAGE SENT"));
}