<?php
	if(isset($_REQUEST['name']))
		{
			$body='
			<h1>Soul Arist Communities Enquiry Form</h1>
			<p>Thank you for your enquiry! </p>
			<p>You have given us something to think about, let us arm ourselves with the necessary information in response to your enquiry and get back to you at the soonest. </p>
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
						<th>Organisation :</th>
						<th>'.$_REQUEST['organisation_input1'].','.$_REQUEST['organisation_input2'].'</th>
					</tr>
					<tr>
						<th>Hi! Tell us about your passionate idea. What did you have in mind? :</th>
						<th>'.$_REQUEST['text1'].'</th>
					</tr>
					<tr>
						<th>Help us narrow the interest group or area with a selection below: </th>
						<th>'.implode(',',$_REQUEST['text2']).','.$_REQUEST['text21'].'</th>
					</tr>
					<tr>
						<th>Language of delivery:</th>
						<th>'.$_REQUEST['language1'].','.$_REQUEST['language2'].'</th>
					</tr>
					<tr>
						<th>Do you have some to translate:</th>
						<th>'.$_REQUEST['optradio'].'</th>
					</tr>
					<tr>
						<th>Tell us a little about the timeframe, location and any other details that might help:</th>
						<th>'.$_REQUEST['text3'].'</th>
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
		$mail->setFrom("communities@soularist.com", 'Community Enquiry');
		$mail->addReplyTo('communities@soularist.com', 'Community Enquiry');
		//$mail->addAddress('govindarajselvam90@gmail.com ', 'Govind');
		//$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
		$mail->addAddress('rajkumar.bizsoft@gmail.com', 'Rajkumar');
		//$mail->addAddress('communities@soularist.com', 'Community Enquiry');
      //  $mail->addAddress('bizsoftseo@gmail.com', 'Arun');
		$mail->Subject = 'Community Enquiry';
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