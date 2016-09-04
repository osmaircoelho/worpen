<?php
include '../info.php';

$sender_Form  = $_POST['worpen_form'];
$receiver_Name  = $_POST['receiver_Name'];
$receiver_Email = $_POST['receiver_Email'];
$subject  = $_POST['subject'];
$message = $_POST['message'];
$return = "../../".$_POST['return'];

if (isset($sender_Form)) {

  $servemail = $INFO_MAIL['serv'];
  $servemail_Port = $INFO_MAIL['port'];
  $servemail_Name = $INFO['namesite'];
  $servemail_Email = $INFO_MAIL['email'];
  $servemail_password = $INFO_MAIL['password'];

  require_once('PHPMailer/PHPMailerAutoload.php');
   
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth  = true;
  $mail->Charset   = 'utf8_decode()';
  $mail->Host  = $servemail;
  $mail->Port  = $servemail_Port;
  $mail->Username  = $servemail_Email;
  $mail->Password  = $servemail_password;
  $mail->From  = $receiver_Email;
  $mail->FromName  = utf8_decode($receiver_Name);
  $mail->IsHTML(true);
  $mail->Subject  = utf8_decode($subject);
  $mail->Body  = utf8_decode($message);

  $mail->AddAddress($receiver_Email,utf8_decode($receiver_Name));
   
  if(!$mail->Send()) {
    header("Location: {$return}");
  } else {
    $return = $return."&m=error";
    header("Location: {$return}");
  } 

}
?>