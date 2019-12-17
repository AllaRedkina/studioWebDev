<?php
    $email = $_POST['email_subscribe'];

    //преобразует все символы, декодирует url, удалим пробелы с начала и конца строки
    $email = htmlspecialchars($email);
    $email = urldecode($email);
    $email = trim($email);

    //через js (custom.js) скрывает поле подписки и выдает сообщение
    if (mail('StudioWebDevil@gmail.com', 'Подписка на новости', 'Заявка от email: '.$email ,'')) {

    // Email has sent successfully, echo a success page.

    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Подписка успешно оформлена.</h1>";
    echo "<p>Спасибо за интерес к StudioWebDevil.</p>";
    echo "</div>";
    echo "</fieldset>";

} else {

    echo 'ERROR!';

}

