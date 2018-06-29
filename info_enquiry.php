<?php


	
	if(isset($_REQUEST['name']))
		{
			$body='
			<h1>Soul Arist Enquiry Form</h1>
			<p>Thank you for your enquiry! </p>
			<p>We will go arm ourselves with the necessary information in response to your enquiry and get back to you at the soonest. </p>
			<p>Don’t forget to check that your email and phone numbers are entered correctly. We don’t want to lose you out here in cyberspace.</p>
			
				
				<table border="2">
					<tr>
						<th>Name :</th>
						<th>'.$_REQUEST['name'].'</th>
					</tr>
					<tr>
						<th>Email :</th>
						<th>'.$_REQUEST['email'].'</th>
					</tr>
					<tr>
						<th>Phone Number :</th>
						<th>'.$_REQUEST['number'].'</th>
					</tr>
					<tr>
						<th>Interest group(s) :</th>
						<th>'.implode(',',$_REQUEST['int_group']).'</th>
					</tr>
					<tr>
						<th>Interest area(s) :</th>
						<th>'.implode(',',$_REQUEST['int_area']).'</th>
					</tr>
					<tr>
						<th>Specificed question :</th>
						<th>'.$_REQUEST['specific_question'].'</th>
					</tr>
				</table>
			
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
		$mail->setFrom("info@soularist.com", 'Info Enquiry');
		$mail->addReplyTo('info@soularist.com', 'Info Enquiry');
		//$mail->addAddress('govindarajselvam90@gmail.com ', 'Govind');
		$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
		$mail->addAddress('rajkumar.bizsoft@gmail.com', 'Rajkumar');
		$mail->addAddress('info@soularist.com', 'Anitha');
      //  $mail->addAddress('bizsoftseo@gmail.com', 'Arun');
		$mail->Subject = 'Info Enquiry';
		$mail->msgHTML($body);
		//$mail->AltBody = 'Hi';
		if (!$mail->send()) {
			echo "<script>javascript: alert('test msgbox')></script>";
		} else {
			//echo '<script type="text/javascript">alert("Message Send Successfully");window.location="contactus.html";</script>';
			echo '<script type="text/javascript">
			alert("Thank You For the contact us!!!");
		    window.location.href="http://denariusoft.com/templates/soularistfinal/contactus.html";
			</script>';
		}
	
	
//mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
//echo "registered";

?>