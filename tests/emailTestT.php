<?php 
//mail("vladimir.khonin@megafon.ru","test","ghfjkshgjks");
//data/ansible/wog/vendor/swiftmailer/swiftmailer/lib/
require_once '/data/ansible/wog/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('mail.megafon.ru', 25)
    ->setUsername('wog')
//    ->setPassword('Zxcvbnm,1');//thwFWj32');
    ->setPassword('j9GzBZ2wA98I')// thwFWj32')
    ->setEncryption( "tls" );
      
$mailer = Swift_Mailer::newInstance($transport);


// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(array("wog@megafon.ru" => 'WoG'))
    ->setTo(array("vladimir.khonin@megafon.ru", "vladimir.khonin@megafon.ru" => 'A name'))
    ->setBody('Here is the message itself')
        ;
        
        // Send the message
        $result = $mailer->send($message);     