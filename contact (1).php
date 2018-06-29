<?php
$body="";
		if(isset($_REQUEST['name']))
		{
			$body='<table border="10" cellpadding="20">
					<tr>
						<td>Name</td>
						<td>'.$_REQUEST['name'].'</td>
					</tr>
					<tr>
						<td>Mail Id</td>
						<td>'.$_REQUEST['email'].'</td>
					</tr>
					<tr>
						<td>Message</td>
						<td>'.$_REQUEST['message'].'</td>
					</tr>
                                        <tr>
						<td>Phone Number</td>
						<td>'.$_REQUEST['phone_no'].'</td>
					</tr>
				</table>';	
			
		}
	//echo $body;		
		date_default_timezone_set('Etc/UTC');
		require 'include/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Debugoutput = 'html';
		$mail->Host = 'sg2plcpnl0114.prod.sin2.secureserver.net';
                $mail->Port = 25;
                $mail->SMTPAuth = false;
                $mail->SMTPSecure = false;
		$mail->Username = "mail@denariusoft.com";
		$mail->Password = "test123!@#";
		$mail->setFrom('info@denariusoft.com', 'Denariusoft');
		$mail->addReplyTo('info@denariusoft.com', 'Denariusoft');
		$mail->addAddress('anitha.bizsoft@gmail.com', 'Anitha');
                $mail->addAddress('bizsoftseo@gmail.com', 'Arun');
		$mail->Subject = 'Denariusoft ContactForm';
		$mail->msgHTML($body);
		//$mail->AltBody = 'Hi';
		if (!$mail->send()) {
			echo "<script>javascript: alert('test msgbox')></script>";
		} else {
			echo '<script type="text/javascript">alert("Message Send Successfully");window.location="contactus.html";</script>';
		}
