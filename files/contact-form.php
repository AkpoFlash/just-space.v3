<?php
if($_POST) {
	$personal = $_POST['personal'];
	$tel = $_POST['tel'];
	$website = $_POST['website'];
	$message = $_POST['message'];

	if($tel != '' && $personal != '' && $message != '') {
		$personal = htmlspecialchars($personal);
		$tel = htmlspecialchars($tel);
		$website = htmlspecialchars($website);
		$message = htmlspecialchars($message);
	
		//$headers .= 'From: '.$_POST['email'].' <'.$_POST['email'].'>'.PHP_EOL;
		/*
		$headers .= 'MIME-Version: 1.0'.PHP_EOL;
		$headers .= 'Content-type: text/html; charset=utf-8'.PHP_EOL; 
		$tel_message = '<html> 
			<head> 
				<title>Private Message</title> 
			</head>
			<body>
				<p>Name and Vorname: '.$_POST['personal'].'</p>
				<p>E-mail: '.$_POST['tel'].'</p>
				<p>Website: '.$_POST['website'].'</p>
				<p>Message: '.$_POST['message'].'</p>
			</body>
		</html>';
	 
	 
		mail('myemail@dot.com', 'Private Message', $tel_message, $headers); // here put your email
		*/
	}
}
?>