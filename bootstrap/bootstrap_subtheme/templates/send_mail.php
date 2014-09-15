<?php 
//print_r($_POST);
if(isset($_POST['send'])){
	$v_from = $_POST['c_email'];
	$subject = $_POST['c_subject'];
	$topic = "Mail from Radio !";
	$message = 'The following person has contacted you via Radio1UAE website.<br />
	Name :'.$_POST['c_name'].'<br />
	Email :'.$_POST['c_email'].'<br />
	Subject :'.$_POST['c_subject'].'<br />
	Message:'.$_POST['c_message'].'<br />
	';
	$headers = 	'MIME-Version: 1.0' . "\r\n".
				'Content-type: text/html; charset=iso-8859-1' . "\r\n".
				'From: '.$v_from."\r\n" .
				'Reply-To: '.$v_from. "\r\n" .
				'X-Mailer: PHP/' . phpversion();		

	$to = 'arunr@acube.co';
	mail($to, $topic, $message, $headers);
}
?>
<SCRIPT language="JavaScript">
alert('Thank you! \n Your message has been submitted.');
window.location="/contact";
</SCRIPT>