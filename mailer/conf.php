<?php

$mail_settings_dev = [
    'host' => 'sandbox.smtp.mailtrap.io',
    'auth' => true,
    'port' => 2525,
    'username' => '95f894ed73e920',
    'password' => '370815f96fc488',
    'secure' => null,
    'charset' => 'UTF-8',
    'from' => '5409476a49-54c15d@inbox.mailtrap.io',
    'name' => 'WebForMyself',
    'is_html' => true,
];

$mail_settings_prod = [
    'host' => 'smtp.gmail.com',
    'auth' => true,
    'port' => 465, // 587
    'username' => 'kautdi@gmail.com',
    'password' => 'canmgllpudamdiqy',
    'secure' => 'ssl', // tls
    'charset' => 'UTF-8',
    'from' => 'kautdi@gmail.com',
    'name' => 'Новая заявка',
    'is_html' => true,
];
