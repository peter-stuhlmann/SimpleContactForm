<?php

/*
 * Simple ContactForm
 * https://github.com/peter-stuhlmann/SimpleContactForm
 *
 * Copyright Peter R. Stuhlmann
 * Released under the MIT license
 * https://github.com/peter-stuhlmann/SimpleContactForm/blob/master/LICENSE
 *
 * Date: 2019-04-18
 */


$sender = $_POST["email"]; // sender's email address (value of input field with name attribute 'email')
$recipient = "your-mail-address@example.com"; // recipient address (your address)
$mail_cc = ""; // Cc address(es)
$subject = "Contact inquiry"; // subject of the email
 
$url_sending_successfully = "sending-successfully.html"; // url of landing page if message was sent
$url_sending_error = "sending-error.html"; // url of landing page if message could not be sent
 
$ignore_fields = array('submit'); // this field (submit button) will not displayed in the mail
 
// date and time when the message was sent
$weekday_name = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$weekday_num = date("w");
$weekday = $weekday_name[$weekday_num];
$year = date("Y");
$day = date("d");
$month = date("F");
$time = date("H:i");
 
// info when the message was sent (first line of the email)
$msg = "Message sent on $weekday, $month $day, $year - $time\n\n";

// query of input fields and text areas except the $ignore_fields
foreach($_POST as $name => $value) {
  if (in_array($name, $ignore_fields)) {
    continue;
  }
  $msg .= "# $name\n$value\n\n";
}
 
$header = "From: $sender";
 
if (!empty($mail_cc)) {
  $header .= "\nCc: $mail_cc";
}
 
// send plain text email with UTF-8 encoding
$header .= "\nContent-type: text/plain; charset=utf-8";
 
$send_message = mail($recipient,$subject,$msg,$header);
 
// redirect after the contact form has been sent
if($send_message){
  header("Location: ".$url_sending_successfully); // redirect to landing page if message was sent
  exit();
} else{
  header("Location: ".$url_sending_error); // redirect to landing page if message could not be sent
  exit();
}