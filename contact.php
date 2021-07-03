<?php
 $html = 'Name: '. $_POST['name'] .'
 Phone: '.$_POST['phone'].'
 Email: '.$_POST['email'].'
 Message: '.$_POST['message'];
$message = $html;
$subject = 'Enquiry Mail from Pragma Law & Policy'; 
$headers = 'From:natraj@bigappcompany.in' . "\r\n" . 'Reply-To:natraj@bigappcompany.in' . "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
$to ='natraj@bigappcompany.in';
if(mail($to, $subject, $message, $headers)) {
     echo "<script>alert('Thanks For Contacting. We will contact you shortly.');location.href=\"index.html\"</script>";
}
else 
{
    echo "<script>alert('Unable to send mail. Please try after some time.');location.href=\"index.html\"</script>"; 
}			
?>