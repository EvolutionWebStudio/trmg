 <?php
function cox_mail($subject, $text, $from)
{
    //change this to your email.
   $to = "termag@teol.net";
    //$to = "ilija.tesic@gmail.com";
    //begin of HTML message
    $message = $text;
   //end of message

    // To send the HTML mail we need to set the Content-type header.
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-2, windows-1250 \r\n";
    $headers  .= "From: $from\r\n";
    //options to send to cc+bcc
    //$headers .= "Cc: [email]goolub.igor@gmail.com[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    


     if(mail($to, $subject, $message, $headers))
     {
        return true;
     }
     else
     {
     	echo "Mail nije poslat";
        return false;
		
     }
}
 
 ?>