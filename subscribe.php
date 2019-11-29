<?php
    $email = $_POST['email'];

    //преобразует все символы, декодирует url, удалим пробелы с начала и конца строки
    $email = htmlspecialchars($email);
    $email = urldecode($email);
    $email = trim($email);

    //убрала проверку, чтобы, в случае ошибки, не перекидывало на пустую страницу
    //if (
     //   mail("allairedkina@gmail.com", "Заявка с сайта", "E-mail: ".$email ,"From: example2@mail.ru \r\n");
    /*)
    {     echo "сообщение успешно отправлено";
    } else {
      echo "при отправке сообщения возникли ошибки";
    }*/

    //через js (custom.js) скрывает поле подписки и выдает сообщение
    if( mail("allairedkina@gmail.com", "Заявка с сайта", "E-mail: ".$email ,"From: example2@mail.ru \r\n")) {

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

/*   // перенаправление на страницу, с которой была вызвана подписка
   if (@$_SERVER['HTTP_REFERER'] != null) {
       header("Location: ".$_SERVER['HTTP_REFERER']);
   } else {
       header ('Location: index.html');
   }

    exit();*/
