<?php


	
	if(isset($_REQUEST['email']))
		{
			$body='
			<center><h1>Soul Arist Subscribtion Details</h1></center>
			<p>'.$_REQUEST['email'].' is Requeseted for the Email Subscribtion in the Soul Arist</p>
			';	
			
		}
	
		date_default_timezone_set('Etc/UTC');
		require 'include/PHPMailerAutoload.php';
		$mail = new PHPMailer;
	//	$mail->isSMTP();
		$mail->SMTPDebug = 2;
	    //$mail->Debugoutput = 'html';
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "sendmailbiz@gmail.com";
		$mail->Password = "test123!@#";
		$mail->setFrom("info@soularist.com", 'Subscribtion');
		$mail->addReplyTo('info@soularist.com', 'Subscribtion');
		//$mail->addAddress('govindarajselvam90@gmail.com ', 'Govind');
		$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
      	       $mail->addAddress('rajkumar.bizsoft@gmail.com', 'Rajkumar');
                $mail->addAddress('info@soularist.com', 'Soularist');
		$mail->Subject = 'Subscribtion';
		$mail->msgHTML($body);
		//$mail->AltBody = 'Hi';
		if (!$mail->send()) {
			echo "<script>javascript: alert('test msgbox')></script>";
		} else {
			//echo '<script type="text/javascript">alert("Message Send Successfully");window.location="contactus.html";</script>';
			echo '<script type="text/javascript">
			alert("Thank You For the Subscribtion!!!");
		    window.location.href="http://denariusoft.com/templates/soularistfinal";
			</script>';
		}
	
	
//mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
//echo "registered";

?>