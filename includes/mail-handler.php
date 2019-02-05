<?php

if (isset($_GET['service']) && isset($_POST['submitted'])) {
    require_once 'SMTPClient.php';
    $managersEmails = [
        'zeitgeist1988@gmail.com',
    ];
    //$managerEmail = 'zeitgeist@ukr.net';
    //$managerEmail = 'zeitgeist1988@gmail.com';
    header("Content-type:application/json");
    $body = '';
    $body .= isset($_POST['your_email']) ? "Email: ".$_POST['your_email'] . "\r\n" : '';
    $body .= isset($_POST['your_name']) ? "Name: ".$_POST['your_name'] . "\r\n" : '';
    $body .= isset($_POST['message']) ? "Message: \r\n".$_POST['message'] . "\r\n" : '';

    if(DEV_MODE === 'development') {
        $smtpOptions = [
            'smtpHost' => 'smtp.gmail.com',
            'smtpPort' => '465',
            'user' => 'zeitgeist1988@gmail.com',
            'password' => 'babtwtfhuuziotzn',
            'from' => 'zeitgeist1988@gmail.com',
            'security' => 'ssl',
        ];
    } else {

        $managersEmails = [
            'george@mgine.net',
            'max@mgine.net',
        ];

        /*
        $smtpOptions = [
            'smtpHost' => 'mail.adm.tools',
            'smtpPort' => '25',
            'user' => 'dianetika-informer@dianetika.in.ua',
            'password' => '3TByr59V6DvYCcd2',
            'from' => 'dianetika-informer@dianetika.in.ua',
        ];
        */
        $smtpOptions = [
            'smtpHost' => 'smtp.gmail.com',
            'smtpPort' => '465',
            'user' => 'zeitgeist1988@gmail.com',
            'password' => 'babtwtfhuuziotzn',
            'from' => 'zeitgeist1988@gmail.com',
            'security' => 'ssl',
        ];
    }

    $smtpClient = new SMTPClient($smtpOptions);
    foreach ($managersEmails as $managerEmail) {
        $smtpClient->sendMail($managerEmail, 'MGINE contact form message from '.$_SERVER['SERVER_NAME'], $body, null, 'text/plain');
    }

    echo json_encode(['success' => true,]);

    die();
}