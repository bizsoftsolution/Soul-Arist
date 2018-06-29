<?php


	
	if(isset($_REQUEST['name']))
		{
			$body='
			<h1>Soul Arist Teamup Enquiry Form</h1>
			<p>Thank you for your interest!  </p>
			<p>We look forward to learning more about you and gauge how well our ecosystems match. We will get back to you as soon as possible.</p>
			<p>Don’t forget to check that your email and phone numbers are entered correctly. We don’t want to lose you out here in cyberspace. Quick reminder – our name is S O U L A R I S T, not artist</p>
			
				
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
						<th>Tell us about your passionate idea. What did you have in mind? :</th>
						<th>'.$_REQUEST['text1'].'</th>
					</tr>
					<tr>
						<th>Describe your ecosystem – just top three words that describe you best :</th>
						<th>'.$_REQUEST['text2'].'</th>
					</tr>
					<tr>
						<th>What would you like to create together? :</th>
						<th>'.$_REQUEST['text3'].'</th>
					</tr>
					<tr>
						<th>List your top 5 skills that would be valuable in an innovative learning environment :</th>
						<th>'.$_REQUEST['text4'].'</th>
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
		$mail->setFrom("teamup@soularist.com", 'Teamup Enquiry');
		$mail->addReplyTo('teamup@soularist.com', 'Teamup Enquiry');
		//$mail->addAddress('govindarajselvam90@gmail.com ', 'Govind');
		//$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
		$mail->addAddress('rajkumar.bizsoft@gmail.com', 'Rajkumar');
		//$mail->addAddress('teamup@soularist.com', 'Soularist');
      //  $mail->addAddress('bizsoftseo@gmail.com', 'Arun');
		$mail->Subject = 'Teamup Enquiry';
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