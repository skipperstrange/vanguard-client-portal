<?php
    //Load symphny libraries to be used by app
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception; 
    
function sendEmail($email, $reciepient, $use_template = true ,$template ='' ){

$_mailer =  new PHPMailer();
$_mailerException =  new Exception();

    $config = get_config('mailer');
    $_mailer->isSMTP();
    $_mailer->Host = $config['outgoing'];
    $_mailer->SMTPAuth = true;
    $_mailer->Username = $config['user']; 
    $_mailer->Password = $config['pass']; 
    //$_mailer->SMTPSecure = 'tls';
    $_mailer->Port = $config['smtp_out'];
    $_mailer->isHTML(true);

   /* $mail->setFrom($info['email'], $info['name']);
    $mail->addReplyTo($info['email'], $info['name']);
    $mail->addAddress($config['mailer']['from']);
    $mail->Subject = $info['subject'];
    $mail->Body = $info['message'];
    */

}