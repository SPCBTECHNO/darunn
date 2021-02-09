<?
    $guard = md5(md5(time())."darunn");
    $time = md5(time());
    $gTime = $_GET["p"];
    $rGuard = md5($gTime."darunn");
    $gGuard = $_POST["guard"];

    $name = $_POST["NAME"];
    $tel = $_POST["TEL"];
    $email = $_POST["EMAIL"];

    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);

    $name = urldecode($name);
    $tel = urldecode($tel);
    $email = urldecode($email);

    $name = trim($name);
    $tel = trim($tel);
    $email = trim($email);

    $to = "info@darunn.ru";
    $subject = "Заявка с сайта";
    $subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
    $message = "Имя: ".$name." Телефон: ".$tel." E-mail: ".$email;
    $headers = "From:info@darunn.ru" . "\r\n" . "Content-type: text/plain; charset=utf-8"."\r\n";
?>

<? if (mail($to, $subject, $message, $headers)) :?>
        <script>
            window.location.href = "https://darunn.ru/?form-action=yes";
        </script>
    <?else: ?>
        <script>
            window.location.href = "https://darunn.ru/?form-action=no";
        </script>
<?endif;?>
