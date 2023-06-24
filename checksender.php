<?php

$email_body = "<p>

<b>Nom prenom : </b>".htmlentities($_POST['full_name'])."</br>
<b>Adresse mail : </b>".htmlentities($_POST['email'])."</br>
<b>Message : </b>".htmlentities($_POST['message'])."</br>

</p>";

$to = "ibrahim.elabed@h-2fluide.fr";
$subject = "H2-FLUIDE : Nouveau message";

$header = "From:no-reply@h-2fluide.fr \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

file_put_contents("email-contact.txt",$email_body, FILE_APPEND)

$retval = mail ($to,$subject,$email_body,$header);

header("Location: ./index.php#contact");

##if( $retval == true ) {
##   echo "Message sent successfully...";
##}else {
##   echo "Message could not be sent...";
##}