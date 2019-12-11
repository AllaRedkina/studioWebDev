<?php
    $email = $_POST['recipient-email'];
    $phone = $_POST['recipient-phone'];
    $service = $_POST['recipient-name'];
    $text = $_POST['message-text'];

    //преобразует все символы, декодирует url, удалим пробелы с начала и конца строки
    $email = htmlspecialchars($email);
    $email = urldecode($email);
    $email = trim($email);

    $phone = htmlspecialchars($phone);
    $phone = urldecode($phone);
    $phone = trim($phone);

    $service = htmlspecialchars($service);
    $service = urldecode($service);
    $service = trim($service);

    $text = htmlspecialchars($text);
    $text = urldecode($text);
    $text = trim($text);

    $message = "E-mail: ".$email." Phone: ".$phone." Service:".$service." Text: ".$text;

    //через js (custom.js) скрывает поле подписки и выдает сообщение
    if( mail("allairedkina@gmail.com", "Заявка с сайта", "fff","From: example2@mail.ru \r\n")) {

        // Email has sent successfully, echo a success page.
/**/
        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "<h1>Подписка успешно оформлена.</h1>";
        echo "<p>Спасибо за интерес к StudioWebDevil.</p>";
        echo "</div>";
        echo "</fieldset>";


    } else {

        echo 'ERROR!';

    }
