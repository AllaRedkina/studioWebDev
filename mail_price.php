<?php
    $email = $_POST['recipient_email'];
    $phone = $_POST['recipient_phone'];
    $service = $_POST['recipient_name'];
    $text = $_POST['message_text'];

    //преобразует все символы, декодирует url, удалим пробелы с начала и конца строки
/*    $email = htmlspecialchars($email);
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
*/

   // $message = "E-mail: ".$email." Phone: ".$phone." Service:".$service." Text: ".$text;

    //через js (custom.js) скрывает поле подписки и выдает сообщение
    if (mail('StudioWebDevil@gmail.com', 'Price с сайта', 'Заявка от email: test1','')) {

        // Email has sent successfully, echo a success page.

        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "</div>";
        echo "</fieldset>";


    } else {

        echo 'ERROR!';

    }

?>
<script type="text/javascript">
    this.$("#ModalMail").modal("hide");
</script>;
