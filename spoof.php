<?php
$to = "nmaurya1509@gmail.com";
$subject = "[URGENT] Password reset request";
$txt = "Hi Namrata, we received a password reset request from your account. Could you reply with your current password
 and someone from our team will get in touch with you shortly.
 <br>
 Regards,<br>
 Support Team.";
$headers = "GMAIL Support <gmail@supportgmail.com>" . "\r\n" ;

mail($to,$subject,$txt,$headers);
?>