﻿<?php

$name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : null;
$phone = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : null;

    $date     = date('Y-m-d');
    $time     = date('H:i:s');
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Date: ".$date."\r\n";
    $headers .= "From: \"Киевтепло\" <info@kievteplo.in.ua>\r\n";
    $mailto   = "kievteplo@ukr.net";

    $subject = "Kievteplo | Вызов мастера | $date, $time";
    $text    = "Вызов мастера с Kievteplo<br />";
    $text   .= "Имя: <strong>$name</strong><br />";
    $text   .= "Телефон: <strong>$phone</strong><br />";
    $text   .= "Дата: <strong>$date </strong><br />";
    $text   .= "Время: <strong>$time</strong><br />";
    

    mail($mailto,$subject,$text,$headers);

    $sms_mailto  = "380973818838@sms.kyivstar.net";
    $sms_subject = "Kievteplo";
    $sms_text    = "Вызов мастера<br />";
    $sms_text   .= $name."<br />";
    $sms_text   .= $phone;

    mail($sms_mailto,$sms_subject,$sms_text,$headers);
echo htmlspecialchars($name) . ', ваш запрос успешно отправлен, мы Вам перезвоним.';
