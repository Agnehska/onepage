<?php
    // Получение данных с формы:
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    
    // Параметры для функции mail:
    $source = getenv('HTTP_REFERER');
    $subject = 'Заявка на звонок';
    $message = "Текст письма:
        <br><br>
        Имя: $name<br>
        Телефон: $phone<br>
        Источник (ссылка): $source
    ";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    // Отправка данных на почту:
    $success = mail("admin@yoursite.com", $subject, $message, $headers);

    // Сохранение инфо о лидах в файл leads.xls :

    $date=date("d.m.y"); // число.месяц.год  
    $time=date("H:i"); // часы:минуты:секунды

    $f = fopen("leads.xls", "a+");
    fwrite($f," <tr>");    
    fwrite($f," <td>$email</td> <td>$name</td> <td>$phone</td> <td>$text </td>");   
    fwrite($f," <td>$source</td>");    
    fwrite($f," </tr>");  
    fwrite($f,"\n ");    
    fclose($f);
?>