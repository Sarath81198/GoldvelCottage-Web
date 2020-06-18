<?php
$to = "sarathsekaran2007@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: contact@goldvelcottages.com";

try {

    mail($to, $subject, $txt, $headers);
    echo 1;
} catch (\Throwable $th) {
    throw $th;
}
