<?php
$to = "sarathsekaran2007@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

try {

    mail($to, $subject, $txt, $headers);
    echo 1;
} catch (\Throwable $th) {
    throw $th;
}
