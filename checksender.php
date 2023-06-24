<?php

$email_body = "<p>

<b>Nom prenom : </b>".htmlentities($_POST['full_name'])."</br>
<b>Adresse mail : </b>".htmlentities($_POST['email'])."</br>
<b>Message : </b>".htmlentities($_POST['message'])."</br>

</p>";

#echo $email_body;


$to = "h2fluide@gmail.com";
$subject = "H2-FLUIDE : Nouveau message";

$header = "From:h2fluide@gmail.com \r\n";
//$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
#print_r($header);
$retval = mail ($to,$subject,$email_body,$header);

header("Location: ./index.php#contact");

##if( $retval == true ) {
##   echo "Message sent successfully...";
##}else {
##   echo "Message could not be sent...";
##}