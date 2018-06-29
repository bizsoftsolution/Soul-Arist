<?php
	if(isset($_REQUEST['name']))
		{
			$body='
			<h1>Soul Arist Services Enquiry Form</h1>
			<p>Thank you for your interest! </p>
			<p>We will get back to your regarding your enquiry within 24 - 48 hours, and from there determine our service engagement requirement and timeline.</p>
			<p>Don’t forget to check that your email and phone numbers are entered correctly. We don’t want to lose you out here in cyberspace. Quick reminder – our name is S O U L A R I S T, not artist </p>
			<p>Our minimum turnaround time is 7 days from date of confirmation, or sooner if possible.</p>
			<p>All documents shared with us will be kept private and confidential at all times.</p>
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
						<th>Type of Support Service(s):</th>
						<th>'.implode(',',$_REQUEST['text1']).'</th>
					</tr>
					<tr>
						<th>Nature/Scope : </th>
						<th>'.implode(',',$_REQUEST['text2']).','.$_REQUEST['text21'].'</th>
					</tr>
					<tr>
						<th>Timeline :</th>
						<th>'.implode(',',$_REQUEST['text3']).'</th>
					</tr>
					<tr>
						<th>Give us a page estimate. 
One page is single sided and single spaced with 12pt Times New Roman font:</th>
						<th>'.implode(',',$_REQUEST['text4']).','.$_REQUEST['text41'].'</th>
					</tr>
					<tr>
						<th>Also do give us a reference phrase for this file so that we know it’s yours in case you send it from a different email address :</th>
						<th>'.$_REQUEST['text5'].'</th>
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
		$mail->setFrom("services@soularist.com", 'Services Enquiry');
		$mail->addReplyTo('services@soularist.com', 'Services Enquiry');
		//$mail->addAddress('govindarajselvam90@gmail.com ', 'Govind');
		//$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
		$mail->addAddress('rajkumar.bizsoft@gmail.com', 'Rajkumar');
		//$mail->addAddress('communities@soularist.com', 'Community Enquiry');
      //  $mail->addAddress('bizsoftseo@gmail.com', 'Arun');
		$mail->Subject = 'Services Enquiry';
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