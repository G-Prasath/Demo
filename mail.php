<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Demolition</title>
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 and CSS3-in older browsers-->
		<script src="js/modernizr.custom.17475.js"></script>

		<!-- Support media queries for IE8 -->
		<script src="js/respond.min.js"></script>

		<script type="text/javascript">
		function delayedRedirect(){
			window.location = "index.html"
		}
		</script>
	
	</head>
	
	<body onLoad="setTimeout('delayedRedirect()', 5000)">
		
		<?php
			$mail = $_POST['email'];
			$hostmail =	$_POST['hostemail'];

			/*$subject = "".$_POST['subject'];*/
			$to = "sales@smartroofings.in";		/* YOUR EMAIL HERE */
			$subject = "Demolition";
			$headers = "From: Demolition <noreply@test.com>";
			$headers .= '' . "\r\n";
			$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
			$message = '<html><body>';
			
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong> Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$message .= "<tr><td><strong> Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$message .= "<tr><td><strong> Phone Number</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";

			//Receive Variable
			$sentOk = mail($to,$subject,$message,$headers);
			//$sentOk1 = mail($mail,$subject,$message,$headers)
		
			
			//Confirmation page
			$user = "$mail";
			$usersubject = "Thank You";
			$userheaders = "From: sales@smartroofings.in\n";
			
			/*$usermessage = "Thank you for your time. Your survey is successfully submitted.\n"; WITH OUT SUMMARY*/
			//Confirmation page WITH  SUMMARY
			$usermessage = "Thank you for your time. Your survey is successfully submitted.\n\nBELOW A SUMMARY\n\n$message"; 
			//mail($user,$usersubject,$usermessage,$userheaders);
		?>

		<!-- END SEND MAIL SCRIPT -->   
		<div class="container">
			<div class="row">
				<div class=" col-md-12" style="text-align:center; padding-top:80px;">
					<h1 style="color:#333">Thank you!</h1>
					<h3 style="color: #6C3">Your Deatails are Successfully Submitted.</h3>
					<p>You will be redirected back in 10 seconds.</p>
				</div>
			</div>
		</div>
	</body>
</html>