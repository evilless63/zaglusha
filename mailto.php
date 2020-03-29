<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

//         $key = hash('sha256', $_POST['LMI_PAYEE_PURSE'] .
//             $_POST['LMI_PAYMENT_AMOUNT'] .
//             $_POST['LMI_PAYMENT_NO'] .
//             $_POST['LMI_MODE'] .
//             $_POST['LMI_SYS_INVS_NO'] .
//             $_POST['LMI_SYS_TRANS_NO'] .
//             $_POST['LMI_SYS_TRANS_DATE'] .
//             '12345678' .
//             $_POST['LMI_PAYER_PURSE'] .
//             $_POST['LMI_PAYER_WM']);

//         if (strtoupper($key) != $_POST['LMI_HASH']) {
// exit();
// 		} else {
    try { 
        $email = new PHPMailer();
            $email->SetFrom('vladislava@gmail.com', 'Поэт'); //Name is optional
            $email->Subject   = 'Стихи';
            $email->Body      = 'Пароль от архива: yreyuifuhwhfiuhiu837438';
            // $email->AddAddress( $_POST['paymentemail'] );
            $email->AddAddress( 'vitaliy030589@gmail.com' );
            
            $file_to_attach = 'stihi.zip';
            
            $email->AddAttachment( $file_to_attach , 'stihi.zip' );
            
            return $email->Send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
            
	// } 