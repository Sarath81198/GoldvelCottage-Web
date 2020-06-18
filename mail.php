<?php
$to = "sarathsekaran2007@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: contact@goldvelcottages.com";

$m =    mail($to, $subject, $txt, $headers);

if($m == true){
    echo "Done";
}
else{
    echo "nope";
}