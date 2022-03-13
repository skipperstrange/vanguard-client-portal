<?php
    //Load symphny libraries to be used by app
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception; 
    

   
function sendEmail($config, $sender = '', $recipient, $message = '', $subject = ''){

$_mailer =  new PHPMailer();
$_mailerException =  new Exception();
    if($sender == ''): $sender = $config['from']; endif;
    $_mailer->isSMTP();
    $_mailer->isHTML();
    $_mailer->Host = $config['outgoing'];
    $_mailer->SMTPAuth = true;
    $_mailer->Username = $config['user']; 
    $_mailer->Password = $config['pass']; 
    //$_mailer->SMTPSecure = 'tls';
    $_mailer->Port = $config['smtp_out'];
    $_mailer->isHTML(true);

    $_mailer->Subject = $subject;
    $_mailer->Body = $message;

    $_mailer->setFrom($sender, $config['name']);
    $_mailer->addReplyTo($config['from'], $config['name']);
    $_mailer->addAddress($recipient);

    try{
        $_mailer->send();
        $_mailer->smtpClose();
        $code = 200;
        return ["message"=>$config['messages']['success'],"status" => $code];
    }
    catch(Exception $_Exception){
        $_mailer->smtpClose();
        print_r($_Exception);
        $code = 422;
        //$Logger->write('Mailer Error: ' . $_mailer->ErrorInfo);
        return ["message"=>$config['messages']['error'], "status" => $code];
    }

}