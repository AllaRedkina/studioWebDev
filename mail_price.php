<?php
    $email = $_POST['recipient_email'];
    $phone = $_POST['recipient_phone'];
    $service = $_POST['recipient_name'];
    $text = $_POST['message_text'];

//echo "<script type=\"text/javascript\">document.find(\"#ModalMail\").modal(\"hide\")</script>";

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


    $e_body = "Вы получили заказ со страницы Цены сайта https://studioweb.com.ua/. Клиент выбрал услугу $service." . PHP_EOL . PHP_EOL;
    $e_content = "\"$text\"" . PHP_EOL . PHP_EOL;
    $e_reply = "Вы можете связаться с клиентом по почте $email или по телефону $phone";

    $msg = wordwrap( $e_body . $e_content . $e_reply );

    //через js (custom.js) скрывает поле подписки и выдает сообщение
    if (mail('StudioWebDevil@gmail.com', 'Заказ со страницы Цены сайта', $msg,'')) {

    // Email has sent successfully, echo a success page.

        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "<h1>Ваш заказ успешно доставлен.</h1>";
        echo "<p>Наши менеджеры свяжутся с Вами в ближайшее время.</p>";
        echo "</div>";
        echo "</fieldset>";


    } else {

        echo 'ERROR!';

    }

