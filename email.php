<?php
// $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pathway = filter_var($_POST['pathway'], FILTER_SANITIZE_URL);
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = $name." - ".$email." - ".$message;
$to = "support@at-school-portal.com";
$headers =  'From: support@at-school-portal.com'       . "\r\n" .
            'Reply-To: support@at-school-portal.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

if(isset($pathway)){
    if(!str_contains($pathway, "?mail=sent")) {
        $pathway = $pathway."?mail=sent";
    }    
    header("Location: {$pathway}");
    die();
  }else{
    header("Location: https://www.at-school-portal.com?mail=sent");
    die();
  }